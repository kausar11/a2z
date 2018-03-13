<?php include_once 'header.php';
	include_once "config.php";
?>

		<div id="et-main-area">

<div id="main-content">


			
<article id="post-47799" class="post-47799 page type-page status-publish hentry">


	<div class="entry-content">
	<div id="section-fix" class="et_pb_section et_animated et_pb_section_0 et_section_regular">
				
				
				
				
					<div id="fix-1" class="et_animated et_pb_row et_pb_row_0 et_pb_equal_columns et_pb_gutters1 et_pb_row_fullwidth">
				<div class="et_pb_column et_pb_column_1_3  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_right  et_pb_text_0 et_pb_with_border">
				
				
				<div class="et_pb_text_inner">
					<p><span style="color: #ffffff;"></span></p>
				</div>
			</div> <!-- .et_pb_text --><div id="fix-3" class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_right et_animated et_pb_text_1">
				
				
				<div class="et_pb_text_inner">
					<h1><span style="color: #ffffff;">GETTING OUR<br />COMPANY PROFILE THERE</span></h1>
				</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
			<div class="et_pb_column et_pb_column_2_3  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et_pb_section_parallax et-last-child">
				
				
				<div class="et_pb_code et_pb_module  et_pb_code_0">
				
				
				<div class="et_pb_code_inner">
					
		<!-- MasterSlider -->
		<div id="P_MS5a925c659d058" class="master-slider-parent msl ms-parent-id-1"   >
<?php
	$sql_min_id = "SELECT * FROM `slider` ORDER BY `slider`.`id` ASC limit 1";
	$result_min_id = $db->query($sql_min_id);
	$data_min_id = mysqli_fetch_array($result_min_id);
	$image_min_id = $data_min_id[0];
	$sql="SELECT * FROM `slider` where id='$image_min_id'";
	$result = $db->query($sql);
	$data=mysqli_fetch_array($result);
	$image_min_id++;

	?>
			
			<!-- MasterSlider Main -->
			<div id="MS5a925c659d058" class="master-slider ms-skin-light-6 round-skin" >
				 				 
				<div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
					<img style="width:940px;height:550px;" src="<?=$data[1];?>" alt="" title="" data-src="<?=$data[1];?>" />


					<div class="ms-thumb" ><div class="ms-tab-context"><div class=&quot;ms-tab-context&quot;></div></div>
					</div>
				</div>
				<div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
				<?php 
					$sql="SELECT * FROM `slider` where id='$image_min_id'";
					$result = $db->query($sql);
					$data=mysqli_fetch_array($result);
					$image_min_id++;
				?>
					<img style="width:940px;height:550px;" src="<?=$data[1];?>" alt="" title="" data-src="<?=$data[1];?>" />


						<div class="ms-thumb" ><div class="ms-tab-context"><div class=&quot;ms-tab-context&quot;></div></div>
					</div>
				</div>
				<div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
					<?php 
					$sql="SELECT * FROM `slider` where id='$image_min_id'";
					$result = $db->query($sql);
					$data=mysqli_fetch_array($result);
					$image_min_id++;
				?>
					<img style="width:940px;height:550px;" src="<?=$data[1];?>" alt="" title="" data-src="<?=$data[1];?>" />

					<div class="ms-thumb" ><div class="ms-tab-context"><div class=&quot;ms-tab-context&quot;></div></div>
				</div>
				</div>
				<div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
					<?php 
						$sql="SELECT * FROM `slider` where id='$image_min_id'";
						$result = $db->query($sql);
						$data=mysqli_fetch_array($result);
						$image_min_id++;
					?>
					<img style="width:940px;height:550px;" src="<?=$data[1];?>" alt="" title="" data-src="<?=$data[1];?>" />


					<div class="ms-thumb" ><div class="ms-tab-context"><div class=&quot;ms-tab-context&quot;></div></div>
				</div>
				</div>

			</div>
			<!-- END MasterSlider Main -->

			 
		</div>
		<!-- END MasterSlider -->

		<script>
		(function ( $ ) {
			"use strict";

			$(function () {
				var masterslider_d058 = new MasterSlider();

				// slider controls
				masterslider_d058.control('bullets'    ,{ autohide:true, overVideo:false, dir:'v', align:'right' , margin:10  });

				masterslider_d058.control('scrollbar'  ,{ autohide:true, overVideo:true, dir:'h', inset:true, align:'top', color:'#404040' , margin:10  , width:4 });
				// slider setup
				masterslider_d058.setup("MS5a925c659d058", {
						width           : 940,
						height          : 550,
						minHeight       : 500,
						space           : 0,
						start           : 1,
						grabCursor      : true,
						swipe           : true,
						mouse           : true,
						layout          : "boxed",
						wheel           : false,
						autoplay        : true,
						instantStartLayers:false,
						loop            : true,
						shuffle         : false,
						preload         : 0,
						heightLimit     : true,
						autoHeight      : false,
						smoothHeight    : true,
						endPause        : false,
						overPause       : false,
						fillMode        : "fill",
						centerControls  : false,
						startOnAppear   : false,
						layersMode      : "center",
						hideLayers      : false,
						fullscreenMargin: 0,
						speed           : 10,
						dir             : "h",
						parallaxMode    : 'swipe',
						view            : "basic"
				});

				
				window.masterslider_instances = window.masterslider_instances || [];
				window.masterslider_instances.push( masterslider_d058 );
			 });

		})(jQuery);
		</script>


				</div> <!-- .et_pb_code_inner -->
			</div> <!-- .et_pb_code --><div class="et_pb_code et_pb_module  et_pb_code_1">
				
				
				<!-- .et_pb_code_inner -->
			</div> <!-- .et_pb_code -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
</div> <!-- .et_pb_section -->
<div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular">
				
				
				
				
					<div class="et_animated et_pb_row et_pb_row_3">
				<div class="et_pb_column et_pb_column_4_4  et_pb_column_7 et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center et_animated et_pb_text_5 et_pb_with_border">
				
				
				<div class="et_pb_text_inner">
					<?php
						$sql = "select * from text where id='10'";
						$result = $db->query($sql);
						$data = mysqli_fetch_array($result);
						echo $data[2];
					?>
				</div>
			</div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center et_animated et_pb_text_6 et_pb_with_border">
				
				
				<div class="et_pb_text_inner">
					<p>Success requires specific industry knowledge and expertise. We understand the unique attributes and specific requirements of your industry.</p>
				</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
			<div class=" et_pb_row et_pb_row_4">
				<div class="et_pb_column et_pb_column_4_4  et_pb_column_8 et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_code et_pb_module  et_pb_code_2">
				
				
				<div class="et_pb_code_inner">
					<div class="carousel-slider-outer carousel-slider-outer-images carousel-slider-outer-47818">
	<style type="text/css">
            #id-47818 .carousel-slider-nav-icon {
                fill: #c4c4c4
            }
            #id-47818 .carousel-slider-nav-icon:hover {
                fill: #e16d38
            }
            #id-47818 .owl-prev,
            #id-47818 .owl-next,
            #id-47818 .carousel-slider-nav-icon {
                height: 48px;
                width: 48px
            }
            #id-47818.arrows-outside .owl-prev {
                left: -48px
            }
            #id-47818.arrows-outside .owl-next {
                right: -48px
            }
        
		    #id-47818 .owl-dots .owl-dot span {
                background-color: #c4c4c4;
                width: 10px;
                height: 10px;
            }
            #id-47818 .owl-dots .owl-dot.active span,
            #id-47818 .owl-dots .owl-dot:hover span {
                background-color: #e16d38
            }
		</style>   
		<div id="id-47818" class="owl-carousel carousel-slider arrows-outside arrows-visible-always dots-hidden dots-center dots-square" data-slide-type="image-carousel" data-margin="10" data-slide-by="1" data-loop="true" data-lazy-load="false" data-stage-padding="0" data-auto-width="false" data-dots="false" data-nav="always" data-autoplay="true" data-autoplay-timeout="5000" data-autoplay-speed="500" data-autoplay-hover-pause="true" data-colums="4" data-colums-desktop="4" data-colums-small-desktop="4" data-colums-tablet="3" data-colums-small-tablet="2" data-colums-mobile="1">
		
		
		<div class="carousel-slider__item"><img id="zoom_01" width="150" height="150" src="profile/1.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/1.jpg" /><div class="carousel-slider__caption"></div>
		</div>
		
		<div class="carousel-slider__item"><img id="zoom_02" width="150" height="150" src="profile/2.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/2.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		<div class="carousel-slider__item"><img id="zoom_03" width="150" height="150" src="profile/3.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/3.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		<div class="carousel-slider__item"><img id="zoom_04" width="150" height="150" src="profile/4.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/4.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		<div class="carousel-slider__item"><img id="zoom_05" width="150" height="150" src="profile/5.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/5.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		<div class="carousel-slider__item"><img id="zoom_06" width="150" height="150" src="profile/6.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/6.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		<div class="carousel-slider__item"><img id="zoom_07" width="150" height="150" src="profile/7.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/7.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		<div class="carousel-slider__item"><img id="zoom_08" width="150" height="150" src="profile/8.jpg" class="attachment-thumbnail size-thumbnail" alt="Applied Logistics | Freight | Shipping | Australia | International" data-zoom-image="profile/8.jpg"  /><div class="carousel-slider__caption"></div></div>
		
		
	 <script type="text/javascript">
				$("#zoom_01").elevateZoom({scrollZoom : true});
				$("#zoom_02").elevateZoom({scrollZoom : true});
				$("#zoom_03").elevateZoom({scrollZoom : true});
				$("#zoom_04").elevateZoom({scrollZoom : true});
				$("#zoom_05").elevateZoom({scrollZoom : true});
				$("#zoom_06").elevateZoom({scrollZoom : true});
				$("#zoom_07").elevateZoom({scrollZoom : true});
				$("#zoom_08").elevateZoom({scrollZoom : true});
			  </script>
		</div><!-- #id-## -->
</div>

				</div> <!-- .et_pb_code_inner -->
			</div> <!-- .et_pb_code -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> 	

</div>
</div>
</div> 
</div>
</div> 
</article> 
</div> 
	<span class="et_pb_scroll_top et-pb-icon"></span>


			<?php include_once "footer.php";?>