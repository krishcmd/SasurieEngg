<?php if(isset($_POST[admission_form]))
{$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$dated =date("jS M Y, h:i a");
	if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
			$body = "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#666666\">
				  <tr>
					<td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#e3e3e3\">
					  <tr>
						<td bgcolor=\"#FFFFFF\"><div align=\"center\"><font color=\"#FF0000\" size=\"2\"><b>Admission Form Details </b></font></div></td>
					  </tr>
					</table>
					  <table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" bgcolor=\"#e3e3e3\">
						  <tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Name</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[name]."</td>
						</tr>
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Fathers Name Name</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[f_name]."</td>
						</tr>
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Address</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[address]."</td>
						</tr> 
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Caste</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[caste]."</td>
						</tr> 
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Religion</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[religion]."</td>
						</tr> 
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Phone No</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[phone_no]."</td>
						</tr>
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Email ID</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[email_id]."</td>
						</tr> 	
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Courses</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[courses]."</td>
						</tr> 	
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Departments</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$_POST[departments]."</td>
						</tr> 						
						<tr>
						  <td bgcolor=\"#FFFFFF\"><font color=\"#5e686e\" size=\"1\"><b>Dated</b></font></td>
						  <td bgcolor=\"#FFFFFF\">".$dated."</td>
						</tr>						
						</table></td>
				 </tr>
				</table>";
$to1 = 'admissionsection@sasurie.com';
$from = "admission@sasurieengg.com"; 
$subject = "admission from sasurieengg.com";
$message = $body;
$headers  = "From: $from\r\n"; 
$headers .= "Content-type: text/html\r\n";  
$mail=mail($to1, $subject, $message, $headers);
if(isset($mail))
{
$feedbacksuccess_Career="<strong>Thank you for your interest. </strong><br /> We will get in touch with you if your soon. ";
$_POST=array();
}
else
{
$feed_msg_err_Career= "Sorry... Something went wrong. Please try again.";
}
} else {
$feed_msg_err_Career="Sorry, You have provided an invalid security code";
}
}
?>