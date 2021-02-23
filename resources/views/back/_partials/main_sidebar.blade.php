<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        @if(config('edashboard')['app_logo_enable'])
            <img src="{{ config('edashboard')['app_logo'] }}" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
        @endif
        <span class="brand-text font-weight-light">{{ config('edashboard')['app_title'] }}</span>
    </a>
    <div class="sidebar">
        @include('back._partials.side_bar')
    </div>
    <!-- /.sidebar -->
</aside>
