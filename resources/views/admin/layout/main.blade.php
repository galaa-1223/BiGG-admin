@extends('../admin/layout/base')

@section('body')
    <body class="app">
        @yield('content')

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection