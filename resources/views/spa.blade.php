<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('dist/app.css') }}">
</head>
<body>
<noscript>
    <strong>We're sorry but {{ config('app.name', 'Suoo.io') }} doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
</noscript>

<div id="app"></div>

{{-- Global configuration object --}}
<script>
    window.Laravel = {!! $config !!};
</script>

{{-- Load the application scripts --}}
<script src="{{ mix('dist/app.js') }}"></script>
</body>
</html>
