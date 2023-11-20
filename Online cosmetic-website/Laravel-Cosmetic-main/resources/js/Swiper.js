

import 'owl.carousel';


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/owl.carousel/dist/assets/owl.carousel.css', 'public/css')
   .copy('node_modules/owl.carousel/dist/assets/owl.theme.default.css', 'public/css')
   .copy('node_modules/owl.carousel/dist/owl.carousel.js', 'public/js')
   .copy('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/js');

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsiveClass: true
        })
    })
</script>