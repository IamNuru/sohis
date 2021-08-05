<!-- Start Footer -->
<style>
   .footer-app-full-name{
      color: white;
      font-size: 16px;
      padding: 1px;
      font-weight: 600;
   }
</style>
<footer class="footer-box">
    <div class="container">
    
       <div class="row">
       
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog">
                <div class="full margin-bottom_30 d-flex">
                  <img src="{{asset('images/sohis-logo.webp')}}" alt="#" style="max-height: 3.5rem; max-width: 3.5rem"/>
                  <span class="footer-app-full-name">{{config('sohis.fullname')}}</span>
                  </div>
                 <div class="full white_fonts">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                 </div>
             </div>
          </div>
          
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
               <div class="footer_blog footer_menu white_fonts">
                        <h3>Quick links</h3>
                        <ul> 
                          <li><a href="#">> Admission </a></li>
                          <li><a href="#">> Staff</a></li>
                          <li><a href="#">> Contact us</a></li>
                          <li><a href="#">> Resources</a></li>
                        </ul>
                     </div>
             </div>
             
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog full white_fonts">
                         <h3>Newsletter</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                         <div class="newsletter_form">
                            <form action="/newsletter" method="post">
                               <input type="email" placeholder="Your Email" name="#" required />
                               <button>Submit</button>
                            </form>
                         </div>
                     </div>
                </div>	 
          
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog full white_fonts">
                         <h3>Contact us</h3>
                         <ul class="full">
                           <li><img src="images/i5.png"><span>{{config('sohis.location')}}</span></li>
                           <li><img src="images/i6.png"><span>{{config('sohis.email')}}</span></li>
                           <li><img src="images/i7.png"><span>{{config('sohis.phone')}}</span></li>
                         </ul>
                     </div>
                </div>	 
          
       </div>
    
    </div>
</footer>
<!-- End Footer -->