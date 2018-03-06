<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themesflat.com/html/corpbusiness/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 15:22:33 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <meta name="Yubraj Basnet" content="International Trade Link">

    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>International Trade Group</title>


    {{--Google Search Optimization--}}

    <meta name="description" content="International Trade Group Pvt. Ltd. is one of the reputed recruiting agencies in Nepal.
                                This company is registered under Nepal Government, Ministry of Labour. (No.
                                706/064/065). Till now our Company has been successful to satisfy the demands of many
                                Gulf countries in the Middle East for their manpower requirement.Manpower in Nepal. Send manpower to Qatar,Dubai,Kuwait,Saudi.Manpower,Recruiting agency, Manpower training orintation, Staffing services
" />

    <meta name="google" content="nositelinkssearchbox" />
    <link rel="icon" sizes="16x16" href="images/uploadlogo.jpg">



    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">
</head>
<body class="home">

<div class="preloader">
    <div class="dizzy-gillespie"></div>
</div><!-- /.preloader -->

<div class="boxed">

    @include('partials.header')

   {{-- <div class="page-title parallax parallax7">
        <div class="title-heading">

          --}}{{--  <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1><b>Vacancy and Notices</b></h1>
                </div>

            </div>--}}{{--
        </div><!-- /.row -->
    </div><!-- /.title-heading -->
--}}
    <section class="main-content" id="clouds">

        <div class="container">
            <div class="row"  >
                <div class="col-sm-8">
                    <div class="post-wrap">


                        @for ($i = 0; $i < sizeOf($notices); $i++)

                            <article class="main-post" id="{{$i}}">
                                <div class="featured-post">
                                    <img style="width: 500px; height: 300px; object-fit: cover;" src="uploads/{{ $notices[$i]->image }}" alt="{{ $notices[$i]->title }}"
                                         style="height: 470px; width: 770px"/>
                                    <br><br>
                                    <div class="row">
                                        {{--<li class="day">Posted on</li>
                                       --}} &nbsp; &nbsp;&nbsp;<span class="month"><b>   Posted On :{{ date('d,F,Y', strtotime($notices[$i]->created_at)) }}</b></span>
                                    </div>
                                    <!-- /.entry-meta -->
                                </div><!-- /.featured-post -->
                                <div class="entry-post-title">
                                    <h5 class="post-title"><a>{{$notices[$i]->title}}</a></h5>
                                </div><!-- /.entry-post-title -->

                                <div class="entry-content">
                                    <p style="overflow-wrap:break-word">{{$notices[$i]->description}}</p>

                                </div><!-- /.entry-content -->
                            </article><!-- /.main-post -->
                        @endfor


                        {{--             <div class="blog-pagination">
                                         <ul class="flat-pagination">
                                             <li class="prev"><a href="#" title=""><i class="fa fa-angle-left"
                                                                                      aria-hidden="true"></i></a></li>
                                             <li><a href="#" title="">1</a></li>
                                             <li><a href="#" title="">2</a></li>
                                             <li><a href="#" title="" class="active">3</a></li>
                                             <li><a href="#" title="">4</a></li>
                                             <li class="next"><a href="#" title=""><i class="fa fa-angle-right"
                                                                                      aria-hidden="true"></i></a></li>
                                         </ul><!-- /.flat-pagination -->
                                     </div><!-- /.blog-pagination -->
                        --}}

                    </div><!-- /.post-wrap -->
                </div><!-- /.col-sm-8 -->
                <div class="col-sm-4">
                    <div class="sidebar">
                 {{--       <div class="widget widget-search">
                            <form action="#" method="get" class="search-form" accept-charset="utf-8">
                                <input type="search" class="search-field" placeholder="Search..." name="search"
                                       value="">
                                <button class="search-submit-form">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div><!-- /.widget-search -->
                 --}}

                        <div class=" widget widget-categories">
                            <h4 class="widget-title" style="color: #255577;">INDEX</h4>
                            <ul>

                                @for ($i = 0; $i < sizeOf($notices); $i++)

                                    <li><a href="#{{$i}}" title=""
                                           >{{$notices[$i]->title}}</a></li>

                                @endfor
                            </ul>
                        </div><!-- /.widget-categories -->
            {{--            <div class="widget widget-recent">
                            <h5 class="widget-title" style="color: #255577;">You can trust us!!!</h5>
                            <div class="recent-list">
                                <div class="recent-image">


                                    <img src="/images/page/trustus.jpg"
                                         style="height: 417px;width: 330px
                                                              ;">
                                </div>


                                <script>
                                    $(function () {
                                        $('a[href*=#]:not([href=#])').click(function () {
                                            var target = $(this.hash);
                                            target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
                                            if (target.length) {
                                                $('html,body').animate({
                                                    scrollTop: target.offset().top
                                                }, 1000);
                                                return false;
                                            }
                                        });
                                    });
                                </script>


                                --}}{{--  <div class="recent-image">
                                      <a href="#" title=""><img src="images/blog/small-02.png" alt=""></a>
                                  </div>
                                  <div class="recent-image last">
                                      <a href="#" title=""><img src="images/blog/small-03.png" alt=""></a>
                                  </div>
                                  <div class="recent-image">
                                      <a href="#" title=""><img src="images/blog/small-04.png" alt=""></a>
                                  </div>
                                  <div class="recent-image">
                                      <a href="#" title=""><img src="images/blog/small-05.png" alt=""></a>
                                  </div>
                                  <div class="recent-image last">
                                      <a href="#" title=""><img src="images/blog/small-06.png" alt=""></a>
                                  </div>
                                --}}{{--
                                <div class="clearfix"></div>
                            </div><!-- /recent-list -->
                        </div><!-- /.widget-brochure -->
            --}}            {{--      <div class="widget widget-tags">
                                  <h3 class="widget-title">TAGS</h3>
                                  <div class="tag-cloud">
                                      <a href="#" title="" class="tag-link">Design</a>
                                      <a href="#" title="" class="tag-link">Home</a>
                                      <a href="#" title="" class="tag-link">Industry</a>
                                      <a href="#" title="" class="tag-link">Marketing</a>
                                      <a href="#" title="" class="tag-link">Business</a>
                                      <a href="#" title="" class="tag-link">Solution</a>
                                      <a href="#" title="" class="tag-link">Real</a>
                                      <a href="#" title="" class="tag-link">Build</a>
                                  </div><!-- /.tag-cloud -->
                              </div><!-- /.widget-tags -->
                        --}}  </div><!-- /.sidebar -->
                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

    @extends('partials.footer')

    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a><!-- /.go-top -->
    </div><!-- /.button-go-top -->
</div>

<!-- Javascript -->
<script type="text/javascript" src="javascript/jquery.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/easing.js"></script>
<script type="text/javascript" src="javascript/owl.carousel.js"></script>
<script type="text/javascript" src="javascript/parallax.js"></script>
<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="javascript/waypoints.min.js"></script>

<script type="text/javascript" src="javascript/main.js"></script>

</body>

<!-- Mirrored from themesflat.com/html/corpbusiness/blog by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 15:23:39 GMT -->
</html>