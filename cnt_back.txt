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
					<p><span style="color: #ffffff;">YOUR LOGISTICS TEAM</span></p>
				</div>
			</div> <!-- .et_pb_text --><div id="fix-3" class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_right et_animated et_pb_text_1">
				
				
				<div class="et_pb_text_inner">
					<h1><span style="color: #ffffff;">WE&#8217;RE YOUR<br />
BRIDGE TO<br />
THE INDUSTRY</span></h1>
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
			<div id="fix-2" class="et_pb_section et_pb_section_1 et_section_regular">
				
				
				
				
					<div class=" et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_1_3  et_pb_column_2 et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_blurb et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_blurb_0 et_pb_blurb_position_left et_pb_with_border">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_top et-pb-icon-circle et-pb-icon-circle-border" style="color: #e16d38; background-color: rgba(65,127,187,0); border-color: #ffffff;">&#xe06b;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Opening Hours</h4>
						<div class="et_pb_blurb_description">
							<p><span style="color: #ffffff;">Mon-Fri:  5am &gt; 7pm</span><br />
<span style="color: #ffffff;">Sat-Sun: 6am &gt; 4pm</span></p>
						</div><!-- .et_pb_blurb_description -->
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_3 et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_blurb et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_blurb_1 et_pb_blurb_position_left">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_top et-pb-icon-circle et-pb-icon-circle-border" style="color: #e16d38; background-color: rgba(65,127,187,0); border-color: #ffffff;">&#xe076;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Email Us</h4>
						<div class="et_pb_blurb_description">
							<p><span id="et-info-email" style="color: #ffffff;">info@khanlogisticsltd.com </span></p>
						</div><!-- .et_pb_blurb_description -->
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_4 et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_blurb et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_blurb_2 et_pb_blurb_position_left">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_top et-pb-icon-circle et-pb-icon-circle-border" style="color: #e16d38; background-color: rgba(65,127,187,0); border-color: #ffffff;">&#xe090;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Call Us Anytime</h4>
						<div class="et_pb_blurb_description">
							<p><span style="color: #ffffff;">+8801610200001 </span></p>
						</div><!-- .et_pb_blurb_description -->
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->
			
			
			<div class="et_pb_section et_pb_section_2 et_section_regular">
				
				
				
				
					<div class=" et_pb_row et_pb_row_2">
				<div class="et_pb_column et_pb_column_1_3  et_pb_column_5 et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_2 et_pb_with_border">
				
				
				<div class="et_pb_text_inner">
					<h1><strong><span style="color: #417fbb;"><span style="color: #162232;">Working For You</span><span style="color: #e16d38;">.</span></span></strong></h1>
				</div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_space et_pb_divider et_pb_divider_0 et_pb_divider_position_"><div class="et_pb_divider_internal"></div></div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_3 et_pb_with_border">
				
				
				<div class="et_pb_text_inner">
					<p>Khan Logistics specialises in providing solutions to logistical challenges.</p>
				</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_3  et_pb_column_6 et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_justified et_animated et_pb_text_4 et_pb_with_border">
				
				
				<div class="et_pb_text_inner">
	<?php
		
		$sql = "select * from text where id='1'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		echo $data[2];
	?>
				</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->
			
			 <!-- .et_pb_section -->
			
			
		<!-- .et_pb_section -->
<!-- .et_pb_section -->
<div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular">




	<div class="et_animated et_pb_row et_pb_row_7">
		<div class="et_pb_column et_pb_column_4_4  et_pb_column_12 et_pb_css_mix_blend_mode_passthrough et-last-child">


			<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center et_animated et_pb_text_10 et_pb_with_border">


			<div class="et_pb_text_inner">
			<h1><span style="color: #f9002c;margin-left: -453px;">Our Service</span><span style="color: #e16d38;">.</span></h1>
			</div>
		
			</div> <!-- .et_pb_text -->
<?php
	$sql = "select * from service";
	$result = $db->query($sql);
	$count = trim(mysqli_num_rows($result));
	$count = round($count/2);
	$sql = "SELECT * FROM `service` ORDER BY `service`.`id` ASC limit 1";
	$result = $db->query($sql);
	$data = mysqli_fetch_array($result);
	$id = $data[0];
	$id2 = $id+1;
	for($i=1;$i<=$count;$i++){
?>
			<div class="et_pb_module et_pb_blog_grid_wrapper  et_pb_blog_0">
				<div class="et_pb_blog_grid clearfix et_pb_bg_layout_light">


					<div class="et_pb_ajax_pagination_container">
						<div class="et_pb_salvattore_content" data-columns>
			<?php
				$sql = "SELECT * from service where id='$id' || id='$id2'";
				$result = $db->query($sql);
				while($data = mysqli_fetch_array($result)){
			?>
							<div class="service">
								<article id="post-49525" class="et_pb_post clearfix post-49525 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

							<div class="et_pb_image_container">							<a href="#" class="entry-featured-image-url">
							<img src="<?php echo $data[1];?>" alt='Roll on roll off (RORO) shipping in Australia' width='400' height='250' />															</a>
							</div> <!-- .et_pb_image_container -->
									<h2 class="entry-title"><a href=""><?php echo $data[2];?></a></h2>

							<p class="post-meta"><?php echo $data[3];?></p>
									
							</article> 
							</div>
							
			<?php
				}
				++$id;
				$id++;
				++$id2;
				$id2++;
			?>		
				<?php 
				
					}
					
				?>			

								
							<!-- .et_pb_post -->
							

							<!-- .et_pb_post -->
							</div><!-- .et_pb_salvattore_content -->
					</div>
				</div> <!-- .et_pb_posts --> 
			</div>
			</div> <!-- .et_pb_column -->


	</div> <!-- .et_pb_row -->


</div> <!-- .et_pb_section -->					</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


	<span class="et_pb_scroll_top et-pb-icon"></span>


			<?php include_once "footer.php";?>