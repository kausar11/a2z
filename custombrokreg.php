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
	<p><span style="color: #ffffff;">WAYS TO MOVE</span></p>
</div>
</div> <!-- .et_pb_text --><div id="fix-3" class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_right et_animated et_pb_text_1">


<div class="et_pb_text_inner">
	<h1><span style="color: #ffffff;">GETTING YOUR<br />CUSTOMS BROKERAGE THERE</span></h1>
</div>
</div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
<div class="et_pb_column et_pb_column_2_3  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et_pb_section_parallax et-last-child">


<div class="et_pb_code et_pb_module  et_pb_code_0">


<div class="et_pb_code_inner">
	
<!-- MasterSlider -->
<div id="P_MS5a925c659d058" class="master-slider-parent msl ms-parent-id-1"   >
<?php
				$sql = "select * from service_images where id='2'";
				$result = $db->query($sql);
				$data = mysqli_fetch_array($result);
			?>
			<img style="width:850px;height:550px;" src="<?php echo $data[2];?>" class="main" height="264" />



</div>
<!-- END MasterSlider -->


</div> <!-- .et_pb_code_inner -->
</div> <!-- .et_pb_code --><div class="et_pb_code et_pb_module  et_pb_code_1">


<!-- .et_pb_code_inner -->
</div> <!-- .et_pb_code -->
</div> <!-- .et_pb_column -->


</div> <!-- .et_pb_row -->


</div> <!-- .et_pb_section -->
<div class="et_pb_section et_pb_section_2 et_section_regular">




	<div class=" et_pb_row et_pb_row_2">
	<div class="et_pb_column et_pb_column_1_3  et_pb_column_5 et_pb_css_mix_blend_mode_passthrough">


	<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_2 et_pb_with_border">


	<div class="et_pb_text_inner">
		<h1><strong><span style="color: #417fbb;"><span style="color: #162232;"> CUSTOMS BROKERAGE</span></span></strong></h1>
	</div>
	</div> <!-- .et_pb_text -->
	
	<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_3 et_pb_with_border">


	
	</div> <!-- .et_pb_text -->
	</div> <!-- .et_pb_column -->
	<div class="et_pb_column et_pb_column_2_3  et_pb_column_6 et_pb_css_mix_blend_mode_passthrough et-last-child">


	<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_justified et_animated et_pb_text_4 et_pb_with_border">


	<div class="et_pb_text_inner">
	<?php
		$sql = "select * from text where id='7'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		echo $data[2];
	?>
	</div>
	</div> <!-- .et_pb_text -->
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