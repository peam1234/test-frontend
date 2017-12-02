<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gallery</title>

        <!-- Bootstrap -->
        <link href="{{ URL::asset('resources/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Lightbox Gallery -->
        <link href="{{ URL::asset('resources/assets/css/lightgallery.min.css') }}" rel="stylesheet">

        <!-- Style -->
        <link href="{{ URL::asset('resources/assets/css/style.css') }}" rel="stylesheet">

        <style type="text/css">
            body, html {
                margin: 0;
                height: 100%; 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;

                /*Background Image*/
                background-image: url("https://unsplash.it/1080/768?image=411");

            }
        </style>

    </head>
    <body>
    <div class="bg"></div>
        <div class="gallery container p-3">
            <h1 class="text-center">Title</h1>
            <p class="text-center">description</p>

            <div id="lightgallery" class="row mt-3">

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=435">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=435">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=432">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=432">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=433">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=433">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=436">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=436">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=437">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=437">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=430">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=430">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=330">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=330">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mt-4" data-src="https://unsplash.it/970/500?image=230">
                    <a href="">
                        <img src="https://unsplash.it/970/500?image=230">
                    </a>
                </div>

            </div>
        </div>

        <!-- Jquery -->
        <script src="{{ URL::asset('resources/assets/js/jquery-3.2.1.min.js') }}"></script>
        
        <!-- Plugins Lightbox Gallery -->
        <script src="{{ URL::asset('resources/assets/js/lightgallery.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-thumbnail.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-pager.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-autoplay.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-fullscreen.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-zoom.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-hash.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/lg-share.min.js') }}"></script>

        <script>
            lightGallery(document.getElementById('lightgallery'), {
                animateThumb: false,
                showThumbByDefault: true
            });
        </script>

    </body>
</html>
