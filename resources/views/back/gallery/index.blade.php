<script>
    function loadModal1(url){
        $("#body-content1").load(url);
    }
</script>

<div id="media-gallery" class="modal fade image-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('image_gallery') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="body-content1">


            </div>
            <div class="modal-footer">
                       <button type="button" id="selectImage" class="btn btn-primary"
                               data-dismiss="modal">{{ __('select_image') }}</button>
                       <div class="delete-image-btn">
                           <button type="button" class='btn btn-danger'>{{ __('delete') }}</button>
                       </div>
                       <button type="button" class="btn btn-light" data-dismiss="modal">{{ __('close') }}</button>
            </div>
        </div>
    </div>
</div>




