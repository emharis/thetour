@extends('front.partials.master')

@section('main-content')
<div id="page-meta">
    <div class="inner group">
        <h3>Welcome to my photo gallery page</h3>
        <h4>..i hope you enjoy my works</h4>
    </div>
</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
    <div class="inner group">
        <!-- START CONTENT -->
        <div id="content-page" class="content group">
            <div class="hentry group">
                <script>
                    jQuery(document).ready(function ($) {
                        $('.sidebar').remove();
                                if (!$('#primary').hasClass('sidebar-no')) {
                            $('#primary').removeClass().addClass('sidebar-no');
                        }

                    });
                </script>
                <ul id="portfolio" class="three-columns infinite-scroll">
                    <?php $idx = 1; ?>
                    @foreach($photos as $pht)
                    <li class="{{($idx==1?'first':'')}} {{($idx==3?'last group':'')}} one-third">
                        <div class="overlay_a">
                            <div class="overlay_wrapper">
                               <img  src="{{$pht->img_path}}" data-src="{{$pht->img_path}}" alt="0082" title="0082" />										

                                <div class="overlay">
                                    <a class="overlay_img" href="{{$pht->img_path}}" rel="lightbox" title="" style="width: 100%;background-position-x: center;"></a>
                                    <span class="overlay_title">{{$pht->desc}} </span>
                                </div>
                            </div>
                        </div>
                        <h4><a >{{$pht->desc}} </a></h4>
                    </li>
                    <?php $idx++; ?>
                    @if($idx>3)
                    <?php $idx = 1; ?>
                    @endif
                    @endforeach
                    
                    <a class="jscroll-next" href="{{URL::to('front/gallery/photo/pager?page=2')}}" >Next</a>
                </ul>
            </div>
            <!-- START COMMENTS -->
            <div id="comments">
            </div>
            <!-- END COMMENTS -->
        </div>
        <!-- END CONTENT -->
        <!-- START EXTRA CONTENT -->
        <!-- END EXTRA CONTENT -->
    </div>
</div>
<!-- END PRIMARY -->

<script>
    jQuery(document).ready(function () {
        $('.infinite-scroll').jscroll({
            loadingHtml: '<img src="loading.gif" alt="Loading" /> Loading...',
            nextSelector: '.jscroll-next',
            autoTrigger:true,
            padding:20,
            callback:function(){
                colorboxinit();
            }
        });
    });
</script>
@stop