<footer>


   <div>
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
                   <br>
                   <a href="/index" title="logo corpbusiness">
                       <img class=" col-md-6 col-sm-3 col-xs-4" src="uploads/{{ $aboutus[0]->logo }}" alt="">
                   </a>
               </div>
               <!-- /.col-md-3 col-sm-6 -->
               <div class="col-md-4 col-sm-6 col-xs-12">
                   <br>
                   <div class="widget-footer widget-quicklink">
                       <h3 class="widget-title">
                           QUICK LINK
                       </h3>
                       <ul class="one-half">
                           <li><a href="/" title="">Home</a></li>
                           <li><a href="/about" title="">About us</a></li>
                           <li><a href="/services" title="">Services</a></li>
                           <li><a href="/blog" title="">News</a></li>
                       </ul>
                       <ul class="one-half second">
                           <li><a href="/contact" title="">Contact</a></li>
                           <li><a href="/gallery" title="">Documents</a></li>
                       </ul>
                   </div><!-- /.widget-quicklink -->
               </div><!-- /.col-md-3 col-sm-6 -->
               <div class="col-md-4 col-sm-6 col-xs-12">
                   <br>
                   <div class="widget-footer widget-contact">
                       <h3 class="widget-title">CONTACT US</h3>
                       <ul class="footer-info">
                           <li class="address">{{$aboutus[0]->address}}</li>
                           <li class="email">{{$aboutus[0]->email}}</li>
                           <li class="phone">
                               <span>{{$aboutus[0]->mobile}}</span>
                           </li>
                       </ul>
                   </div><!-- /.widget-contact -->
               </div><!-- /.col-md-3 col-sm-6 -->
           </div><!-- /.row -->
       </div>
       <section class="footer-bottom style2">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <ul class="social-footer">
                           <li class="twitter"><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li class="facebook"><a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       </ul>
                       <div class="copyright">
                           Copyright © Corporation by <a href="#" title="">itgnepal.com.np</a>. All rights reserved
                       </div>
                       <div class="clearfix"></div>
                   </div><!-- /.col-md-12 -->
               </div><!-- /.row -->
           </div><!-- /.container -->
       </section><!-- /.footer-bottom -->



   </div>

    <!-- /.container -->
</footer><!-- /footer -->
