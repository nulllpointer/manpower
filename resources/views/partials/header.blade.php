<script type="text/javascript" src="javascript/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
    });
</script>

<section class="header-top">



    {{--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="flat-infomation">
                    <li class="phone">Call us: <a  title="">{{$aboutus[0]->mobile}}</a></li>
                    <li class="email">Email: <a  title="">{{$aboutus[0]->email}}</a></li>
                </ul><!-- /.flat-infomation -->
                <ul class="flat-social">
                    <li>
                        <a href="#" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    --}}{{--<li>
                        <a href="#" title="">
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            <i class="fa fa-rss" aria-hidden="true"></i>
                        </a>
                    </li>--}}{{--
                </ul><!-- /.flat-social -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->--}}
</section><!-- /.header-top -->

<header id="header" class="header" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="logo" title="itgnepal">
                    <a href="/index" title="logo corpbusiness">
                        <img  src="uploads/{{ $aboutus[0]->logo }}" alt="itglogo" style="   height: 86px;
    width: 254px;">



                    </a>
                </div><!-- /#logo -->
                <div class="btn-menu">
                    <span>a</span>
                </div><!-- //mobile menu button -->
                <div class="menu-extra">
                   {{-- <div class="box-search">

                        <div>
                            --}}{{--<form action="#" method="get" accept-charset="utf-8">
                                <div class="input-search">
                                    <input type="text" name="search">
                                    <button class="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </form>--}}{{--
                        </div><!-- /.top-search -->
                    </div>
                   --}} <div class="box-canvas">
                        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </div>
                </div><!-- /.menu-extra -->
                <div class="nav-wrap" >
                    <nav id="mainnav" class="mainnav" >
                        <ul class="menu">
                            <li class="active">
                                <a href="/index" title="">Home</a>
                            </li>
                            <li>
                                <a href="/about" title="">About</a>
                            </li>
                            <li>
                                <a href="/services" title="">Services</a>
                            {{--<ul class="sub-menu">
                                <li><a href="services/#foo" title="">Why Recruit from Nepal</a></li>
                                <li><a href="services" title="">Services 02</a></li>
                                <li><a href="services" title="">Services 03</a></li>
                            </ul>--}}<!-- /.sub-menu -->
                            </li>
                            {{-- <li>
                                 <a href="/portfolio" title="">Portfolio</a>
                             </li>
 --}}
                            <li>
                                <a href="/gallery" title="">Company Documents</a>
                            </li>

                            <li>
                                <a href="/blog" title="">Demands</a>
                            </li>
                            <li>
                                <a href="/contact" title="">Contact</a>
                            </li>
                        </ul>


                        <!-- /.menu -->
                    </nav><!-- /#mainnav -->
                </div><!-- /.nav-wrap -->
                <div class="clearfix"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /header -->

<div class="menu-canvas">
    <span class="delete">x</span>
    <div class="logo-canvas">
        <a href="#">
            <img src="uploads/{{ $aboutus[0]->logo }}" alt="itgnepal" style="    height: 190px;
    width: 413px;">
        </a>
    </div><!-- /.logo-canvas -->
    <div class="canvas-content">
        <p>International Trade Group Pvt. Ltd. is one of the reputed recruiting agencies in Nepal. This
            company is registered under Nepal Government, Ministry of Labour. (No. 706/064/065).Till now
            our Company has been successful to satisfy the demands of many Gulf countries in the Middle
            East for their manpower requirement </p>
        <ul>
            <li>
                <div class="icon">
                    <span class="icon-map"></span>
                </div>
                <div class="text">
                    <div class="title">
                        Address
                    </div>
                    <p>
                        {{$aboutus[0]->address}} <br/>
                    </p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <span class="icon-chat"></span>
                </div>
                <div class="text">
                    <div class="title">
                        Call us
                    </div>
                    <p>
                        {{$aboutus[0]->mobile}}
                    </p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <span class="icon-envelope"></span>
                </div>
                <div class="text">
                    <div class="title">
                        Email
                    </div>
                    <p>
                        {{$aboutus[0]->email}}
                    </p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <span class="icon-clock"></span>
                </div>
                <div class="text">
                    <div class="title">
                        Open House
                    </div>
                    <p>
                        Sun - Fri: 9.00 am - 5.30 pm
                    </p>
                    <p>
                        Saturday: CLOSED
                    </p>
                </div>
            </li>
        </ul>
        <div class="btn-more">
            <a href="/about">View More</a>
        </div>
    </div><!-- /.canvas-content -->
</div><!-- /.menu-canvas -->
