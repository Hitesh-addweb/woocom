
<section id="contact_info" class="section-padding parallex-bg" style="background-image:url(<?php the_field('footerbg_img',7); ?>)">
    <div class="container div_zindex">
        <div class="row">
                    <div class="col-sm-4">
                <div class="icon_div"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <p><a href="tel:+123-456-7890"><?php the_field("cont",7); ?></a> </p>
            </div>
                             <div class="col-sm-4">
                <div class="icon_div"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <p><a href="mailto: info@example.com"><?php the_field("emil",7); ?></a> </p>
            </div>
                             <div class="col-sm-4">
                <div class="icon_div"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
                <p><a href="tel:+123-456-7890"><?php the_field("cont",7); ?></a> </p>
            </div>
                 </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<footer id="footer">
  <div class="footer_top">
   <div class="container">
       <div class="row">

       <div class="col-md-4">
         <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
               
         </div>
          
         <div class="col-md-8">
            <div class="footer_links">
                            
                 <ul>
                    <li>

              <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
                }
                ?>
                    </ul>
                </div>
                <div class="footer_links">
                    
                                           <ul>

                <?php
                if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
                }
                ?>

                                       </ul>
                    </div>
                    <div class="footer_links">
                                      
                                 <ul>

                <?php
                if(is_active_sidebar('footer-sidebar-4')){
                dynamic_sidebar('footer-sidebar-4');
                }
                ?>
                                              </ul>
                        </div>   
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer_middle">
           <div class="container">
               <div class="row">
                   <div class="col-sm-4">
                                          <?php
                if(is_active_sidebar('footer-sidebar-5')){
                dynamic_sidebar('footer-sidebar-5');
                }
                ?>
                      
                 </div>
                 <div class="col-sm-4">
                                    <?php
                if(is_active_sidebar('footer-sidebar-6')){
                dynamic_sidebar('footer-sidebar-6');
                }
                ?>
                   
            </div>
            <div class="col-sm-4">
               
               <div class="newsletter_wrap">
                   <!-- / MailChimp for WordPress Plugin --> 

                                        <?php
                if(is_active_sidebar('footer-sidebar-7')){
                dynamic_sidebar('footer-sidebar-7');
                }
                ?>                   
              </div>
            </div>
        </div>
    </div>
</div>

<div class="footer_bottom">
   <div class="container">
       <div class="row">
                                 <?php
                if(is_active_sidebar('footer-sidebar-8')){
                dynamic_sidebar('footer-sidebar-8');
                }
                ?>                 
           
            <div class="col-md-6">
                          <?php
                if(is_active_sidebar('footer-sidebar-9')){
                dynamic_sidebar('footer-sidebar-9');
                }
                ?>            
            </div>
        </div>
    </div>
</div>
</footer>
<div>
    <div id="siderwidth1"></div>
    <div id="siderwidth2"></div>
    <div id="siderwidth3"></div>
    <div id="siderwidth4"></div>
    <div id="siderwidth5"></div>
    <div id="siderwidth6"></div>
</div>
<div id="back-top" class="back-top"> 
    <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> 
    </div>

</body>
</html>
<?php wp_footer(); ?>