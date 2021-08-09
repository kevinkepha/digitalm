		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" >
			<div class="container">
<style>
    .rotateimg180 {
  -webkit-transform:rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
</style>
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap" style="padding-top: 0px !important;
    padding-right: 0px !important;
    padding-bottom: 35px !important;
    padding-left: 0px !important;
    ">

					<div class="row col-mb-50">
					    
						<div class="col-lg-8">

							<div class="row col-mb-50" >
							    
							    
							    
								<div class="col-md-6">

									<div class="widget clearfix">

										<img src="img/logos/footerlogo.png" alt="Image" class="footer-logo " style="    max-width: 40%;">

										<p>We take pride in providing Advertising Solutions to our clients and partners </p>
<style>
    a:hover {
  color: #000000!important;
}
</style>

									</div>
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
								</div>

								<div class="col-md-6 center" style=" align:center;">

								<img src="images/insignia_white.png" style="width:50%;" class="center rotateimg180">
									

								</div>

							 
							</div>

						</div>

						<div class="col-lg-4" style="float:right;">

							<div class="row col-mb-50" style="float:right;">
								<div class="col-md-5 col-lg-12" style="float:right;">
									<div class="widget clearfix" style="margin-bottom: -20px; float:right;">

										<div class="row" style="float:left;">
											<div class="col-lg-12 bottommargin-sm">
												 <div class="footer-social-icons mt-25">
            <ul>
              <li><a href="https://fb.me/digitalmara254" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
              <li><a href="https://www.instagram.com/digitalmara_ke/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://twitter.com/digitalmara1" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://linkedin.com/company/digital-mara" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          	<div class="widget subscribe-widget clearfix" style="float:right;">
										<div style="float:right;">
											<address style="float:right;">
											<abbr title="Phone Number"><strong>Phone:</strong></abbr>+254 759 333 333<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> sales@digitalmara.co.ke
										</div>
									</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-12 text-center text-md-center">
							Copyrights &copy; <?php echo date('Y');?> All Rights Reserved by Digital Mara Ltd.
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

	<script>

		var tpj = jQuery;
		var revapi202;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if (tpj("#rev_slider_579_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_579_1");
			} else {
				revapi202 = tpj("#rev_slider_579_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "include/rs-plugin/js/",
					sliderLayout: "fullscreen",
					dottedOverlay: "none",
					delay: 9000,
					responsiveLevels: [1140, 1024, 778, 480],
					visibilityLevels: [1140, 1024, 778, 480],
					gridwidth: [1140, 1024, 778, 480],
					gridheight: [728, 768, 960, 720],
					lazyType: "none",
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll:"off",
						disableFocusListener:false,
					},
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:300,
						levels:[2,4,6,8,10,12,14,16,18,20,22,24,49,50,51,55],
					},
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "hermes",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							}
						}
					}
				});
				revapi202.on("revolution.slide.onloaded",function (e) {
					setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
				});

				revapi202.on("revolution.slide.onchange",function (e,data) {
					SEMICOLON.slider.revolutionSliderMenu();
				});
			}
		}); /*ready*/

	</script>

</body>

 </html>