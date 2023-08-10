<?php 
	require_once('phpmailer/class.phpmailer.php');
	
		//Form Fields
		$userName = $_POST["name"];
		$userPosition = $_POST["Position"];
		$userEmail = $_POST["email"];
		$userContact = $_POST["phone"];
		//$content = $_POST["comment"];
		$date = date("d F, Y");
	
	
	
	if(!isset($userName) || trim($userName) == '' || !isset($userEmail) || trim($userEmail) == '' || !isset($userContact) || trim($userContact) == '')
		{
			print "<p class='Error'>Mandatory Fields Required.</p>";
		}
		else
		{
		
		$mail = new PHPMailer();
		$mail1 = new PHPMailer();
		$mail->Username = "ravish@trocko.in";
		$mail->Password = "Hardware@123";
		$mail->setFrom('ravish@trocko.in', 'trocko - Support');
		
		
		$mail1->Username = "ravish@trocko.in";
		$mail1->Password = "Hardware@123";
		$mail1->setFrom('ravish@trocko.in', 'trocko - Support');
		
	
    	//$mail->setFrom($enqEmail);
		//$mail1->setFrom('sachin.studiomars@gmail.com', 'Web Developer');
		
    	$mail->AddAddress('ravish@trocko.in');
    	
		$mail1->AddAddress($userEmail);
 
		$mail->Subject  =  'New enquiry';
		$mail1->Subject  =  'Thank you for contacting the trocko.';
		
		$mail->IsHTML(true);
		$mail1->IsHTML(true);
		
		$mail->addAttachment($_FILES['cv']['tmp_name'],$_FILES['cv']['name']);

		
		$mail->Body    = '<html>
					<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
						<table style="600" border="0" align="center" cellpadding="15" cellspacing="0" bgcolor=\'#ebebeb\'>
						<tbody>
							<tr>
								<td>
									<table style="font-family: \'Helvetica\', \'Arial\', sans-serif;" width="570" border="0" align="center" cellpadding="25" cellspacing="0" >
										<tbody>
											<tr>
												<td align="left" valign="top" bgcolor="#FFFFFF">
													<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size: 18px; line-height: 28px; text-align: left;">
														<tbody>
															<tr>
																<td align="right" valign="top"><img src="http://trocko.in/images/logo.svg"  alt="TROCKO"/></td>
															</tr>
															<tr>
																<td>
																	<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:29px; margin-bottom:25px; padding-bottom:20px; border-bottom:1px solid #d7d7d7;">
																		<tbody>
																			<tr>
																				<td style="font-size:24px;padding-left:23px;" align="left" valign="top"></td>
																				<td style="font-size:21px;" align="right" valign="top">'.$date.'</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td style="padding-left:23px; padding-right:23px;">
																	<p style="margin-bottom:8px; margin-top:0px;">Hello,</p>
																	<p style="margin-bottom:5px; margin-top:0px;">You have received a career enquiry. Please find the below mentioned details.</p>
																</td>
															</tr>
															<tr>
																<td style="text-transform:uppercase; padding:10px 23px 15px 23px;">
																	<p>Enquiry details</p>
																</td>
															</tr>
															<tr>
																<td>
																	<table border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:18px;">
																	  <tr>
																	    <td align="right" style="padding:5px 23px 5px 23px;"><strong>Position</strong></td>
																	    <td style="padding:5px 23px 5px 23px;">'.$userPosition.'</td>
																      </tr>
																		<tbody>
																			<tr>
																				<td align="right" style="padding:5px 23px 5px 23px;"><strong>Name</strong></td>
																				<td style="padding:5px 23px 5px 23px;">'.$userName.'</td>
																			</tr>
																			<tr>
																				<td align="right" style="padding:5px 23px 5px 23px;"><strong>Email</strong></td>
																				<td style="padding:5px 23px 5px 23px;"><a style="text-decoration:none; color:#000;" href="mailto:'.$userEmail.'">'.$userEmail.'</a></td>
																			</tr>
																			<tr>
																			  <td align="right" style="padding:5px 23px 5px 23px; vertical-align:top;"><strong>Contact</strong></td>
																			  <td style="padding:5px 23px 5px 23px; line-height:28px;">'.$userContact.'</td>
																		  </tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
		</body></html>';
		
		 $mail1->Body    = '<html><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
						<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" bgcolor="#ebebeb">
						<tbody>
							<tr>
								<td>
									<table style="font-family: \'Helvetica\', \'Arial\', sans-serif;" width="600" border="0" align="center" cellpadding="25" cellspacing="0" >
										<tbody>
											<tr>
												<td align="left" valign="top" bgcolor="#FFFFFF">
													<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size: 18px; line-height: 28px; text-align: left;">
														<tbody>
															<tr>
																<td>
																	<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:29px; margin-bottom:25px; padding-bottom:20px; border-bottom:1px solid #d7d7d7;">
																		<tbody>
																			<tr>
																			  <td style="font-size:24px;padding-left:23px;" align="left" valign="top">&nbsp;</td>
																			  <td style="font-size:21px;" align="right" valign="top"><img src="http://trocko.in/images/logo.svg"  alt="TROCKO"/></td>
																		  </tr>
																			<tr>
																			  <td style="font-size:24px;padding-left:23px;" align="left" valign="top">&nbsp;</td>
																			  <td style="font-size:21px;" align="right" valign="top">&nbsp;</td>
																		  </tr>
																			<tr>
																				<td style="font-size:24px;padding-left:23px;" align="left" valign="top"><strong>Thank You!</strong></td>
																				<td style="font-size:21px;" align="right" valign="top">'.$date.'</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td style="padding-left:23px; padding-right:23px;">
																	<p style="margin-bottom:8px; margin-top:0px; text-transform: capitalize;">Hello '.$userName.',</p>
																	<p style="margin-bottom:5px; margin-top:0px;">Thank you for contacting the TROCKO. We appreciate your interest in TROCKO. Our team will contact you soon.</p>
																</td>
															</tr>
															<tr>
																<td style="padding:15px;"></td>
															</tr>
															<tr>
																<td style="padding:10px 23px 0 23px; font-size:15px; color:#555555; border-top:1px  solid #d7d7d7;"><p style="margin:10px 0 0px 0;">&#169; 2019 TROCKO.
																</p></td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
			</body></html>';
		
	if($mail->Send() && $mail1->Send())
	{
		//print "<p class='success'>Enquiry form successfully submitted. Thank you.</p>";
		echo "<script language='javascript'>alert('Your Resume Submitted Successfully!. We will contact you soon ');document.location.href='openings.php';</script>";
	}
	else
	{
		//print "<p class='Error'>Problem in Sending Mail.</p>";
		echo "<script type='text/javascript'>alert('Error in Form :- $mail->ErrorInfo!. We will Fix This soon');document.location.href='openings.php';</script>";
	}
	
		}
?>