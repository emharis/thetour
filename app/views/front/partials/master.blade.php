<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html dir="ltr" lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <base href="{{ URL::to('/') }}/">
    <meta charset="UTF-8" />
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>{{$comp->web_title}}</title>

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="frnt/images/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="frnt/images/favicon.ico" />
    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="frnt/apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="frnt/apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="frnt/apple-touch-icon-72x.png" />
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="frnt/apple-touch-icon-57x.png" />
    <!-- [favicon] end -->

    <!-- CSSs -->
    <link rel="stylesheet" type="text/css" media="all" href="frnt/css/reset.css" /> <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="frnt/style.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" id="max-width-1024-css" href="frnt/css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
    <link rel="stylesheet" id="max-width-768-css" href="frnt/css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
    <link rel="stylesheet" id="max-width-480-css" href="frnt/css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" id="max-width-320-css" href="frnt/css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />

    <!-- CSSs Plugin -->
    <link rel="stylesheet" id="thickbox-css" href="frnt/css/thickbox.css" type="text/css" media="all" />
    <link rel="stylesheet" id="styles-minified-css" href="frnt/css/style-minifield.css" type="text/css" media="all" />
    <link rel="stylesheet" id="buttons" href="frnt/css/buttons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="cache-custom-css" href="frnt/css/cache-custom.css" type="text/css" media="all" />
    <link rel="stylesheet" id="custom-css" href="frnt/css/custom.css" type="text/css" media="all" />

    <!-- FONTs -->
    <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
    <link rel='stylesheet' href='frnt/css/font-awesome.css' type='text/css' media='all' />

    <style>
        .back-to-top {
            position: fixed;
            bottom: 2em;
            right: 0px;
            text-decoration: none;
            color: #000000;
            background-color: rgba(235, 235, 235, 0.80);
            font-size: 12px;
            padding: 1em;
            display: none;
        }

        .back-to-top:hover {    
            background-color: rgba(135, 135, 135, 0.50);
        }
    </style>

    <!-- JAVASCRIPTs -->

    <script type="text/javascript" src="frnt/js/jquery.js"></script>
    <script src="frnt/js/jquery.min.js"></script>
    <script src="frnt/js/jquery-migrate-1.2.1.js"></script>

    <script type="text/javascript" src="frnt/js/comment-reply.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.cycle.min.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.anythingslider.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.easing.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.aw-showcase.js"></script>
    <script type="text/javascript" src="frnt/js/layerslider.kreaturamedia.jquery-min.js"></script>
    <script type="text/javascript" src="frnt/js/shortcodes.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.colorbox-min.js"></script> <!-- nav -->
    <script type="text/javascript" src="frnt/js/jquery.tweetable.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.custom.js"></script>
    <script type="text/javascript" src="frnt/js/contact.js"></script>
    <script type="text/javascript" src="frnt/js/jquery.mobilemenu.js"></script> 
    <script src="frnt/js/jquery.jscroll.js" type="text/javascript"></script>

    <script>
$(document).ready(function () {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
    </script>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="no_js responsive stretched">

    <!-- START BG SHADOW -->
    <div class="bg-shadow">

        <!-- START WRAPPER -->
        <div id="wrapper" class="group">

            <!-- START HEADER -->
            <div id="header" class="group">

                <div class="group inner">

                    <!-- START LOGO -->
                    <div id="logo" class="group">
                        <a href="front/home" title="Pink Rio"><img height="56px" src="frnt/images/NEW-LOGO.png" title="Pink Rio" alt="Pink Rio" /></a>
                    </div>
                    <!-- END LOGO -->

                    <div id="sidebar-header" class="group">
                        <div class="widget-first widget yit_text_quote">
                            {{$homepage->tagline}}
                        </div>
                    </div>
                    <div class="clearer"></div>

                    <hr />

                    <!-- START MAIN NAVIGATION -->
                    @include('front.partials.navigation')
                    <!-- END MAIN NAVIGATION -->
                    <div id="header-shadow"></div>
                    <div id="menu-shadow"></div>
                </div>

            </div>
            <!-- END HEADER -->

            <!-- START PRIMARY -->
            @yield('main-content')
            <!-- END PRIMARY -->

            <!-- START COPYRIGHT -->
            <div id="copyright">
                <div class="inner group">
                    <div class="left">
                        <!--<a href="http://yithemes.com/?ddownload=2046&ap_id=pinkrio-html"><strong>Download the free version for Wordpress</strong></a>-->
                        Copyright &copy; 2015 {{$comp->web_title}}
                    </div>
                    <div class="right">
                        @if($comp->facebook != '')
                        <a href="{{$comp->facebook}}" class="socials-small facebook-small" title="Facebook">facebook</a>
                        @endif
                        @if($comp->twitter != '')
                        <a href="{{$comp->twitter}}" class="socials-small twitter-small" title="Twitter">twitter</a>
                        @endif
                        @if($comp->flickr != '')
                        <a href="{{$comp->flickr}}" class="socials-small flickr-small" title="Flickr">flickr</a>
                        @endif
                        @if($comp->skype != '')
                        <a href="{{$comp->skype}}" class="socials-small skype-small" title="Skype">skype</a>
                        @endif
                        @if($comp->gplus != '')
                        <a href="{{$comp->gplus}}" class="socials-small google-small" title="Google Plus">google plus</a>
                        @endif
                        @if($comp->pinterest != '')
                        <a href="{{$comp->pinterest}}" class="socials-small pinterest-small" title="Pinterest">pinterest</a>
                        @endif
                        @if($comp->tumblr != '')
                        <a href="{{$comp->tumblr}}" class="socials-small tumblr-small" title="Tumblr">tumblr</a>
                        @endif
                        @if($comp->instagram != '')
                        <a href="{{$comp->instagram}}" class="socials-small insta-small" title="Instagram">instagram</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END BG SHADOW -->
    <a href="#" class="back-to-top"><i class=" icon-large icon-arrow-up"></i></a>
</body>
<!-- END BODY -->

</html>