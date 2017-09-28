<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        <div class="wrap">
            @include('_partials/navbar')

            @yield('body')
        </div>
        
        @include('_partials/footer')
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.min.js"></script>
        <script type="text/javascript" src="/js/manifest.js"></script>
		<script type="text/javascript" src="/js/vendor.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/configurator.js"></script>
    </body>
</html>
