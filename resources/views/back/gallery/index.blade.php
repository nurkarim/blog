<script type="text/javascript">
    $(".modal-title").text("Gallery");
    $(".modal-dialog").addClass('modal-lg');
</script>
<div class="row">
    <div class="col-md-4 border-right">
        <form method="POST" action="#" accept-charset="UTF-8" id="imageUploadForm" enctype="multipart/form-data" novalidate=""><input name="_token" type="hidden" value="Hwoint00eATRrrdHDHFQEVY46klqGV10hKfOpPqT">
            <div class="form-group">
                <div class="form-group">
                    <label for="image" class="upload-file-btn btn btn-primary  btn-block"><i class="fa fa-folder input-file" aria-hidden="true"></i> Add Image
                    </label>
                    <input id="image" name="image" type="file" class="form-control d-none" required="" onchange="swapImage(this);uploadBtn()" data-index="0">
                </div>
                <div class="form-group">
                    <div class="form-group text-center">
                        <img src="http://amarsomoy24.com/public/default-image/default-100x100.png " id="perview_current_image" data-index="0" width="200" height="200" alt="image" class="img-responsive img-thumbnail">
                    </div>
                </div>
                <div class="form-group" id="divUploadBtn">
                    <div class="form-group text-center">
                        <button type="submit" name="btn_image_upload" id="media-upload-btn" class="btn btn-primary btn-block"><i class="fas fa-cloud-upload-alt"></i> Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-8">
        <div class="row" id="media-library">

        </div>
        <input type="hidden" id="count" value="1">

        <div class="ajax-loading" id="ajax-image-loading" style="display: block;">No more records!</div>

        <div class="load-more" id="load-more-image" style="display: none;"><a href="javascript:void(0)" class="">Load more...</a></div>

    </div>
</div>
<div class="modal-footer">
    <button type="button" id="selectImage" class="btn btn-primary" data-dismiss="modal" style="display: block;">Select Image</button>
    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    <div class="delete-image-btn pull-left" style="display: block;">
        <button type="button" class="btn btn-danger">Delete</button>
    </div>

</div>
<script>

    $(document).ready(function (e) {
        var image_page_no = 1;
        url = "{{ route('gallery.fetch') }}";
        $(document).on('click', '.btn-image-modal', function () {
            window.value = $(this).attr('data-id');
            var formData = {
                count: $('#count').val()
            };

            console.log(formData);

            $.ajax({
                url: url,
                type: 'get',
                dataType: 'html',
                beforeSend: function () {
                    $('#ajax-image-loading').show();
                },
                success: function (data) {
                    console.log(data);

                    if(parseInt($("#imageCount").val()) * 24 >= parseInt($("#images").val())){
                        $('#load-more-image').hide();
                        $('#ajax-image-loading').html('No more records!');
                    }else{
                        $('#ajax-image-loading').hide();
                        $('#load-more-image').show();
                    }

                    $("#media-library").html(data);
                    $("#imageCount").val(parseInt($("#imageCount").val()) + 1);
                }
            })
                .fail(function () {
                    $('#ajax-image-loading').hide();
                    swal('Oops...', 'Something went wrong with ajax !', 'error');
                })
        });

        // $("#media-library").scroll(function(){
        $(document).on('click', '#load-more-image', function () {

            // var ele = document.getElementById('media-library');
            // if(Math.round(ele.scrollHeight - ele.scrollTop) === ele.clientHeight){
            image_page_no++;
            let next_url = url + '?page=' + image_page_no;

            $.ajax({
                url: next_url,
                type: 'get',
                beforeSend: function () {
                    $('#ajax-image-loading').show();
                },
                dataType: 'html',
                success: function (data) {

                    if(parseInt($("#imageCount").val()) * 24 >= parseInt($("#images").val())){
                        $('#load-more-image').hide();
                        $('#ajax-image-loading').html('No more records!');
                    }else{
                        $('#ajax-image-loading').hide();
                        $('#load-more-image').show();

                    }

                    $("#media-library").append(data);
                    $("#imageCount").val(parseInt($("#imageCount").val()) + 1);
                }
            })
                .fail(function () {
                    $('#ajax-image-loading').hide();
                    swal('Oops...', 'Something went wrong with ajax !', 'error');
                })
            // }
        });

        $('#imageUploadForm').on('submit', (function (e) {
            e.preventDefault();
            $("#media-upload-btn").prop('disabled', true);
            $("#media-upload-btn").html('<i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only"></span> Loading...');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': ""
                }
            });


            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "http://amarsomoy24.com/gallery/image-upload",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data[0].status == 'success') {
                        $("#media-library").prepend(
                            '<div class="col-md-2" id="row_' + data[0].data.id + '"><img id="' + data[0].data.id + '" src="http://amarsomoy24.com/' + data[1] + '" alt="image" class="image img-responsive img-thumbnail"></div>'
                        );
                        $('#perview_current_image').attr('src', "http://amarsomoy24.com/public/default-image/default-100x100.png");
                        $.notify('successfully image uploaded to gallery', "success");
                        $("#image").val('');
                        $("#media-upload-btn").html('<i class="fas fa-cloud-upload-alt"></i> Upload');
                        $("#media-upload-btn").prop('disabled', false);
                        $("#divUploadBtn").show();
                    } else {
                        $("#media-upload-btn").html('<i class="fas fa-cloud-upload-alt"></i> Upload');
                        $("#media-upload-btn").prop('disabled', false);
                        $("#divUploadBtn").show();
                        $.notify(data[1].message, "error");
                    }
                },

                error: function (data) {
                    $.notify(data.responseJSON.message, "danger");
                    $("#media-upload-btn").html('<i class="fas fa-cloud-upload-alt"></i> Upload');
                    $("#media-upload-btn").prop('disabled', false);
                    // $('#error_msg').append(data.responseJSON.message);
                    // console.log(data.responseJSON.message);
                }
            });
        }));

        var selected_image_id = '';

        $(document).on('click', '.image', function () {
            $('.image').removeClass('selected');
            $('.delete-image-btn').css('display', 'block');
            $('#selectImage').css('display', 'block');
            selected_image_id = $(this).attr('id');
            selected_image_src = $(this).attr('src');
            $(this).addClass('selected');
            alert("ok");
        });

        $("#selectImage").on('click', function () {
            // alert(window.value);
            if (window.value == 1) {
                $('#image_id').val(selected_image_id);
                $('#image_preview').attr('src', selected_image_src);
            } else if (window.value == 2) {
                $('#video_thumbnail_id').val(selected_image_id);
                $('#video_thumb_preview').attr('src', selected_image_src);
            }
        });

        $(".delete-image-btn").on('click', function () {
            var div_row = '#row_' + selected_image_id
            var token = "Hwoint00eATRrrdHDHFQEVY46klqGV10hKfOpPqT";
            deleteurl = "http://amarsomoy24.com/gallery/delete-image"

            swal({
                title: "Are you sure?",
                text: "It will be deleted permanently!",
                icon: "warning",
                buttons: true,
                buttons: ["Cancel", "Delete"],
                dangerMode: true,
                closeOnClickOutside: false
            })
                .then(function (confirmed) {
                    if (confirmed) {
                        $.ajax({
                            url: deleteurl,
                            type: 'delete',
                            data: 'row_id=' + selected_image_id + '&_token=' + token,
                            dataType: 'json'
                        })
                            .done(function (response) {
                                swal.stopLoading();
                                if (response.status == "success") {
                                    console.log(response);
                                    swal("Deleted!", response.message, response.status);
                                    $(div_row).fadeOut(2000);

                                    console.log($('#image_id').val());

                                    if($('#video_thumbnail_id').val() == selected_image_id){
                                        $('#video_thumbnail_id').removeAttr('value');
                                        $('#video_thumb_preview').attr('src', 'http://amarsomoy24.com/public/default-image/default-100x100.png');
                                    }

                                    if($('#image_id').val() == selected_image_id){
                                        $('#image_id').removeAttr('value');
                                        $('#image_preview').attr('src', 'http://amarsomoy24.com/public/default-image/default-100x100.png');
                                    }
                                    console.log($('#image_id').val(''));



                                } else {
                                    swal("Error!", response.message, response.status);
                                }
                            })
                            .fail(function () {
                                swal('Oops...', 'Something went wrong with ajax !', 'error');
                            })
                    }
                })
        });

    });


</script>
