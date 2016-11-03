<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>SWS group</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('layouts.partials.head')
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="container">
    @include('layouts.partials.header')

    <div id="content">
        @yield('content')
    </div>

    @include('layouts.partials.footer')

</div>
@include('layouts.partials.scripts')
</body>
</html>