<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patagonian Challenge</title>
    <!--link rel="stylesheet" href="dist/app.css" /-->
    <style>
    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        #footer-wrapper {
            display: inline-block;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        #responsive-router{
            height:86vh;
            overflow:auto;
        }
    }
    @media only screen and (min-width: 769px) {
        /* For desktop or larger : */
        #footer-wrapper {
            display: none;
        }
    }
    </style>
</head>
<body>
    <div id="app">
        <router-view id="responsive-router" :key="$route.fullPath"></router-view>
    </div>
    <script defer src="{{ URL::asset('/dist/app.js') }}"></script>
</body>
</html>