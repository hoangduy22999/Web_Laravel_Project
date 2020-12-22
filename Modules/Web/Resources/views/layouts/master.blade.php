<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Media Store</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="#" />

    <link href="{{asset('web/css/css2.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/jquery.mCustomScrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('web/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/hs.megamenu.css')}}" />

    <link rel="stylesheet" href="{{asset('web/css/theme.css')}}" />

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('web/js/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('web/js/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/js/slick.js')}}"></script>
    <script src="{{asset('web/js/jquery.zeynep.js')}}"></script>
    <script src="{{asset('web/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('web/js/slick.min.js')}}"></script>

    <script src="{{asset('web/js/hs.megamenu.js')}}"></script>
    <script src="{{asset('web/js/hs.core.js')}}"></script>
    <script src="{{asset('web/js/hs.unfold.js')}}"></script>
    <script src="{{asset('web/js/hs.malihu-scrollbar.js')}}"></script>
    <script src="{{asset('web/js/hs.slick-carousel.js')}}"></script>
    <script src="{{asset('web/js/hs.selectpicker.js')}}"></script>
    <script src="{{asset('web/js/hs.show-animation.js')}}"></script>

    <script>
        $(document).on("ready", function () {
            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($("[data-unfold-target]"));

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init(".js-animation-link");


            // open side menu if the button is clicked
            $(".cat-menu").click(function () {
                if ($("html").hasClass("zeynep-opened")) {
                    zeynep.close();
                } else {
                    zeynep.open();
                }
            });
        });
    </script>
</head>
<body class="u-unfold-opened">

@include("web::layouts.header")

@include("web::auth.login")

@yield("content")

@include("web::layouts.footer")

</body>
</html>
