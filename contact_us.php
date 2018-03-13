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
					<h1><span style="color: #ffffff;"><br /></span></h1>
				</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
			<div class="et_pb_column et_pb_column_2_3  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et_pb_section_parallax et-last-child">
				
				
				<div class="et_pb_code et_pb_module  et_pb_code_0">
				
				
				<div class="et_pb_code_inner">
					
		<div class="slider">
<iframe class="my_site_map" src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d3648.430637418759!2d90.38977556498374!3d23.874343634528447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x3755c41638a77a51%3A0x44f4e434d0b7a763!2sAdora%2C+6+Rd+No+1%2FA%2C+Dhaka+1230!3m2!1d23.8738942!2d90.3923291!4m5!1s0x3755c41610ec3fed%3A0xb2b843272751cfec!2sPlot+No-01.+House+01+Rd+No+2%2C+Dhaka+1230!3m2!1d23.874756899999998!2d90.39299729999999!4m5!1s0x3755c41610ec3fed%3A0xb2b843272751cfec!2sPlot+No-01.+House+01+Rd+No+2%2C+Dhaka+1230!3m2!1d23.874756899999998!2d90.39299729999999!4m5!1s0x3755c41610ec3fed%3A0xb2b843272751cfec!2sPlot+No-01.+House+01+Rd+No+2%2C+Dhaka+1230!3m2!1d23.874756899999998!2d90.39299729999999!5e0!3m2!1sen!2sbd!4v1517143613348"  frameborder="0" style="border:0" allowfullscreen></iframe>
<script type="text/javascript">Cufon.now();</script>

<script type="text/javascript">$(window).load(function(){$('.slider')._TMS({duration:1000,easing:'easeOutQuad',preset:'diagonalExpand',slideshow:2000,banners:false,pauseOnHover:true,pagination:true,pagNums:false});});</script>
</div>

		


				</div> <!-- .et_pb_code_inner -->
			</div> <!-- .et_pb_code --><div class="et_pb_code et_pb_module  et_pb_code_1">
				
				
				<!-- .et_pb_code_inner -->
			</div> <!-- .et_pb_code -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
</div> <!-- .et_pb_section -->
<div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular">

<div class="contact_area">
	<div class="contact_text">
		<p> 
			<?php
				$sql = "select * from text where id='14'";
				$result = $db->query($sql);
				$data = mysqli_fetch_array($result);
				echo $data[2];
			?>
		</p>
	</div>
	<div class="contact_img">
		<img src="images/contact.jpg" alt="" />
	</div>
</div>	

<div class="contact_form">
	<table width="92%" >
              <tr>
                <td class="width_100" colspan="2" align="center" valign="top">
				<form action="feedback.php" method="post" name="form1" id="form1" onsubmit="return(isValid())">
                    <table class="text000" bordercolor="#3b7bbe" height="247" cellspacing="1" 
            cellpadding="1" class="width_100" align="center" border="0">
                      <tbody>
                        <script language="JavaScript" type="text/javascript">
function isValid()
	{
		var err = '';
		checkEmail=document.form1.txt_email.value;
		if(document.form1.txt_name.value == '')
			err+= 'Please Insert Your Name \n';
			else if(document.form1.txt_address.value == '')
			err+= ' Please Insert Your Address \n';		
		else if(checkEmail=='')
		err+='- Please insert your email address\n';
	else if ((checkEmail.indexOf('@') < 0) || ((checkEmail.charAt(checkEmail.length-4) != '.') && (checkEmail.charAt(checkEmail.length-3) != '.')))
			err+='- Invalid email address\n';

		else if(document.form1.txt_phone.value == '')
			err+= ' Please Insert Your Telephone \n';

		else if(document.form1.txt_subject.value == '')
			err+= ' Please Insert Your Subject \n';
		else if(document.form1.txt_comments.value == '')
			err+= ' Please Insert Your Comments \n';
		   
		if(err != '')
		{
			alert(err);
			
			return false;
		}
		else
			return true;   
	}
                                    </script>
                       
						<tr>
							<td colspan="2" align="center" valign="center">
								<?php
									if(isset($_REQUEST['masg'])){
										echo "<font size='+1' color='green'>Massege Send Successfully!</font>";
									}
								?>
							</td>
						</tr>
                        <tr>
                          <td class="text8" align="right" width="30%" height="22">* Name : </td>
                          <td width="70%" align="left" valign="center" class="text1"><input class="text12" 
                  id="txt_name" size="30" name="txt_name" placeholder="Name"/></td>
                        </tr>
                        <tr>
                          <td height="23" align="right" valign="center" class="text8">* Address : </td>
                          <td align="left" valign="center" class="text1"><input name="txt_address"class="text12" id="txt_address" value="" size="30" placeholder="Address"/></td>
                        </tr>
                        <tr>
                          <td class="text8" align="right" height="22">* E-mail : </td>
                          <td align="left" valign="center" class="text1"><input name="txt_email"class="text12" id="txt_email" value="" size="30" placeholder="E-mail" /></td>
                        </tr>
                        <tr>
                          <td class="text8" align="right" height="22">* Contact Number  : </td>
                          <td align="left" valign="center" class="text1"><input name="txt_phone" class="text12" id="txt_phone" value=""size="30" placeholder="Contact Number"/></td>
                        </tr>
                        <tr>
                          <td height="23" align="right" valign="center" class="text8">* Subject : </td>
                          <td align="left" valign="center" class="text1"><input class="text12" id="txt_subject" size="30" name="txt_subject" placeholder="Subject"/></td>
                        </tr>
                        <tr>
                          <td height="85" align="right" valign="center" class="text8">* Messages : </td>
                          <td align="left" valign="top" class="text1"><textarea class="text12" id="txt_comments" name="txt_comments" rows="5" cols="40" placeholder="Messages"></textarea></td>
                        </tr>
                        <tr>
                          <td height="28">&nbsp;</td>
                          <td align="left"><a href="#"><input href="" class="text8" id="myBtn" onclick="return CheckValidity();" type="submit" value="Send" name="btnSubmit" action="#" /></a></td>
                        </tr>
                      </tbody>
                    </table>
                </form></td>
              </tr>
            </table>
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