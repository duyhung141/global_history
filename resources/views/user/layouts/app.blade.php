<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <base href="/">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","Global History")</title>
    @yield("before_css")
    @include("user.layouts.head")
    @yield("after_css")
</head>

<body>
{{--<!-- Page Preloder -->--}}
{{--<div id="preloder">--}}
{{--    <div class="loader"></div>--}}
{{--</div>--}}

@include("user.layouts.header")

@include("user.layouts.nav")

@yield("content")

@include("user.layouts.footer")

@yield("before_js")
@include("user.layouts.scripts")
@yield("after_js")
</body>
</html>
