<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" href="{!! asset('images/favicon.ico') !!}"/>
    <title>test docus</title>
    <meta name="title" content=""/>
    <meta name="keywords" content=""/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('images/safari-pinned-tab.svg')}}" color="#5bbad5">
    <!-- Styles -->

@include('partials.includes.css')
@include('partials.includes.top_js')

<!--=== Windows Phone JS Code Start ===-->
    <script type="text/javascript">
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>
    <!--=== Windows Phone JS Code End ===-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="app" class="content">
    @include('partials.header')
    <main class="w-100 py-5">
        <div class="py-4">
            @yield('content')
        </div>
    </main>
    @include('partials.footer')
</div>
@include('partials.includes.bottom_js')

</body>
</html>
