<!DOCTYPE html>
<html lang="en">
<head>
    @include('back._partials.header')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @inject('customHelper', \App\CustomClasses\Helper)
    @if($customHelper->isTopNavEnabled())
        @include('back._partials.nav')
        @php( $def_container_class = 'container-fluid' )
    @else
        @php( $def_container_class = 'container' )
    @endif

    @include('back._partials.main_sidebar')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="{{ config('edashboard.classes_content_header') ?: $def_container_class }}">
                @yield('content_header')
            </div>
        </div>
        <div class="content">
            <div class="{{ config('edashboard.classes_content_header') ?: $def_container_class }}">
                @include('error.message')
                @yield('content')
            </div>
        </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark">

    </aside>


    <div class="mobile-footer d-flex justify-content-between align-items-center d-xl-none">
        <button class="info" type="button" data-toggle="modal" data-target="#siteinfo1"><i class="fas fa-home"></i>
        </button>
        <button class="info" type="button" data-toggle="modal" data-target="#siteinfo1"><i class="fas fa-bell"></i>
        </button>

        <button class="info" type="button" data-toggle="modal" data-target="#siteinfo1"><i class="fas fa-user"></i>
        </button>
        <button class="info" type="button" data-widget="pushmenu"><i class="fas fa-bars"></i>
        </button>

    </div>

{{--    <footer class="main-footer">--}}
{{--        <strong>Copyright &copy; 2021 <a href="http://nurkarim.me">Nurkarim.me</a>.</strong>--}}
{{--        All rights reserved.--}}
{{--        <div class="float-right d-none d-sm-inline-block">--}}
{{--            <b>Version</b> 1.0.0--}}
{{--        </div>--}}
{{--    </footer>--}}
</div>

@include('back._partials.footer')
@yield('js')
@include('back._partials.modal')
<script>
    var _token = $('meta[name="csrf-token"]').attr('content');
    function sendMarkRequest(id = null) {
        return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }

    function deleteNotification(id = null) {
        return $.ajax("{{ route('deleteNotification') }}", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }

    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                var countN=$(".count_notification").html();
                $(".count_notification").html((countN-1));
                $(".count_notification_1").html((countN-1)+' Notifications');
                $(this).remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $(".count_notification").html((0));
                $(".count_notification_1").html('0 Notifications');
                $('.alert_list').remove();
            })
        });

        $('.delete-notification').click(function() {
            let request = deleteNotification();
            request.done(() => {
                $(".count_notification").html((0));
                $(".count_notification_1").html('0 Notifications');
                $('.alert_list').remove();
            })
        });
    });
</script>


</body>
</html>
