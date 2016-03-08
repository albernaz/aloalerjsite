<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
{{--<script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>--}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
//    // Disable jQuery Mobile loading message
//    $.mobile.loading().hide();
//    $.mobile.loadingMessage = false;

    var isShowing = false;

    jQuery(function()
    {
        jQuery('#btn-telefones-uteis').click(function()
        {
            if ( ! isShowing)
            {
                jQuery('#agenda-tel-uteis').show(function()
                {
                    isShowing = true;
                });
            }
        });

        jQuery(document).click(function(evt)
        {
            if(jQuery(evt.target).closest('.agenda-tel-uteis').length)
            {
                return;
            }

            if(jQuery(evt.target).closest('.indice').length)
            {
                return;
            }

            if (isShowing)
            {
                jQuery('#agenda-tel-uteis').hide();

                isShowing = false;
            }
        });
    });
</script>

<script language="javascript">
    $('#collapseOne').on('show.bs.collapse', function () {
        $('.panel-heading').animate({}, 500);
        $('.panel-heading').addClass('dropdown');
        $('.panel-heading').removeClass('dropup');
    })
    $('#collapseOne').on('hide.bs.collapse', function () {
        $('.panel-heading').animate({}, 500);
        $('.panel-heading').addClass('dropup');
        $('.panel-heading').removeClass('dropdown');

    })
</script>

{{--<script type="text/javascript">--}}
    {{--jQuery(document).ready(function()--}}
    {{--{--}}
        {{--jQuery('.slider').slick({--}}
            {{--dots: true,--}}
            {{--infinite: true,--}}
            {{--speed: 500,--}}
            {{--//fade: true,--}}
            {{--cssEase: 'linear',--}}
            {{--slidesToScroll: 1,--}}
            {{--autoplay: true,--}}
            {{--autoplaySpeed: 2000,--}}
            {{--arrows: true,--}}
            {{--draggable:true,--}}
            {{--mobileFirst:true,--}}
            {{--pauseOnDotsHover:true,--}}
            {{--swipe: true--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

{{--<script language="javascript">--}}
{{--$(document).ready(function() {--}}

{{--$("#owl-example").owlCarousel({--}}

    {{--// Most important owl features--}}
    {{--items : 1,--}}
    {{--itemsCustom : false,--}}
    {{--itemsDesktop : [1199,1],--}}
    {{--itemsDesktopSmall : [980,1],--}}
    {{--itemsTablet: [768,1],--}}
    {{--itemsTabletSmall: false,--}}
    {{--itemsMobile : [479,1],--}}
    {{--singleItem : true,--}}
    {{--itemsScaleUp : true,--}}
    {{--//Basic Speeds--}}
    {{--slideSpeed : 200,--}}
    {{--paginationSpeed : 800,--}}
    {{--rewindSpeed : 1000,--}}
    {{--//Autoplay--}}
    {{--autoPlay : true,--}}
    {{--stopOnHover : false,--}}
    {{--// Navigation--}}
    {{--navigation : false,--}}
    {{--rewindNav : true,--}}
    {{--scrollPerPage : false,--}}
    {{--// Responsive--}}
    {{--responsive: true,--}}
    {{--responsiveRefreshRate : 200,--}}
    {{--responsiveBaseWidth: window,--}}
    {{--//Auto height--}}
    {{--autoHeight : true--}}
    {{--}--}}
{{--);--}}

{{--});--}}
{{--</script>--}}

<script language="javascript">
    jQuery(document).ready(function ($) {
        setInterval(function () {
            moveRight();
        }, 3000);

        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;

        $('#slider').css({ width: slideWidth, height: slideHeight });

        $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: + slideWidth
            }, 200, function () {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        function moveRight() {
            $('#slider ul').animate({
                left: - slideWidth
            }, 200, function () {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        $('a.control_prev').click(function () {
            moveLeft();
        });

        $('a.control_next').click(function () {
            moveRight();
        });

//        $("#slider ul").swipeleft(function()
//        {
//            moveRight();
//        });
//
//        $("#slider ul").swiperight(function()
//        {
//            moveLeft();
//        });
    });
</script>
