<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en-ca">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="alternate" href="{{ url('') }}" hreflang="x-default" />
    <link rel="apple-touch-icon" type="image/png" href="{{ url('public/front/visitorguard/images/icon.png') }}">
    <link rel="icon" type="image/png" href="images/icon.png">
    <title>Life Insurance Ontario – Get Tips, Online Quotes for Life Insurance</title>
    <meta name="description"
        content="Lifeadvice, a leading life insurance company in Ontario offers a range of life insurance plans and policies to help you protect you and your family.Get instant quotes." />
    <link rel="canonical" href="{{ url('') }}" />
    <link href="{{ url('public/front/visitorguard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ url('public/front/visitorguard/css/style.css') }}" rel="stylesheet">
    <script src="{{ url('public/front/visitorguard/js/jquery.min.js') }}"></script>

   


</head>

<body>
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')
    
    <script src="{{ url('public/front/visitorguard/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/front/visitorguard/js/bootnavbar.js') }}"></script>
    <script>
        $(function() {
            $('#main_navbar').bootnavbar();
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
</body>

</html>
@yield('script')
