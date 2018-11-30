<?php

if ($_POST['contact_submitted'])
{
	//Form submitted, sent out the email and notify the user that the email has been sent
	$topic = $_POST['subject'];
	$user_name = $_POST['name'];
	$email = $_POST['email'];
	$confirm_email = $_POST['confirm_email'];
	if (strcmp($email, $confirm_email) != 0)
	{
		$msg = "<span style='color: #900; font-size: 24px;'>The emails do not match.</span>";
	}
	else
	{
	$telephone = $_POST['telephone'];
	$additional_phone = $_POST['additional_telephone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$description = $_POST['description'];	
	
	$adverse_name = $_POST['adverse_name'];
	$adverse_address = $_POST['adverse_address'];
	$adverse_city = $_POST['adverse_city'];
	$adverse_state = $_POST['adverse_state'];
	$adverse_zip = $_POST['adverse_zip'];
	
	$comments = $_POST['comments'];
	
	$to = 'tlindley@lindleylawoffice.com';
	$subject = "New Contact Request from LindleyLawOffice.com";
	$message = '<table align="center" width="625" border="0" cellspacing="0" cellpadding="10" style="border:1px solid #999999;">
  <tbody>
    <tr>
      <td colspan="2" style="text-align:center;background:#005283;font-size:24px;color:#ffffff;text-transform:uppercase;font-weight:bold;width:100%;height:50px;line-height: 50px">Contact Request</td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;font-size:14px;line-height: 34px;color:#333333;padding-top:20px;">I\'m requesting information on:</td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;font-size:24px;color:#333333;padding-bottom:20px;">'.$topic.'</td>
    </tr>
    <tr>
      <td bgcolor="#ececec" colspan="2" style="text-align:left;font-size:14px;color:#333333;font-weight:bold;padding-top:20px;padding-bottom:20px;padding-left:30px;">CONTACT INFORMATION</td>
    </tr>
    <tr>
      <td width="80" style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-top:40px;padding-left:30px;">Name:</td>
      <td width="503" style="text-align:left;font-size:14px;color:#999999;padding-top:40px;">'.$user_name.'</td>
    </tr>
    <tr>
      <td width="80" style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-left:30px;">Email:</td>
      <td width="503" style="text-align:left;font-size:14px;color:#999999;">'.$email.'</td>
    </tr>
    <tr>
      <td width="80" style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-left:30px;">Phone #:</td>
      <td width="503" style="text-align:left;font-size:14px;color:#999999;">'.$telephone.'</td>
    </tr>
    <tr>
      <td style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-left:30px;">Additional Phone #:</td>
      <td style="text-align:left;font-size:14px;color:#999999;">'.$additional_phone.'</td>
    </tr>
    <tr>
      <td width="80" style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-left:30px;">Address:</td>
      <td width="503" style="text-align:left;font-size:14px;color:#999999;">'.$address.' '.$city.', '.$state.' '.$zip.'</td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:left;font-size:14px;color:#005283;font-weight:bold;padding-top:50px;padding-left:30px;">Description of Legal Matter/Legal Question</td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:left;font-size:14px;color:#999999;padding-bottom:30px;padding-left:30px;"><span style="text-align:left;font-size:14px;color:#999999;">'.$description.'</span></td>
    </tr>
    <tr>
      <td colspan="2" height="20"></td>
    </tr>
    <tr>
      <td bgcolor="#ececec" colspan="2" style="text-align:left;font-size:14px;color:#333333;font-weight:bold;padding-top:20px;padding-bottom:20px;padding-left:30px;">ADVERSE PARTY INFORMATION</td>
    </tr>
    <tr>
      <td width="80" style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-top:40px;padding-left:30px;">Name:</td>
      <td width="503" style="text-align:left;font-size:14px;color:#999999;padding-top:40px;"><span style="text-align:left;font-size:14px;color:#999999;">'.$adverse_name.'</span></td>
    </tr>
    <tr>
      <td width="80" style="text-align:lrft;font-size:14px;color:#005283;font-weight:bold;padding-left:30px;">Address:</td>
      <td width="503" style="text-align:left;font-size:14px;color:#999999;">'.$adverse_address.' '.$adverse_city.', '.$adverse_state.' '.$adverse_zip.'</td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:left;font-size:14px;color:#005283;font-weight:bold;padding-top:50px;padding-left:30px;">Additional Comments</td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:left;font-size:14px;color:#999999;padding-bottom:50px;padding-left:30px;"><span style="text-align:left;font-size:14px;color:#999999;">'.$comments.'</span></td>
    </tr>
  </tbody>
</table>';
	$headers = 'From: webmaster@lindleylawoffice.com' . "\r\n" .
    'Reply-To: webmaster@lindleylawoffice.com' . "\r\n" .
    "MIME-Version: 1.0\r\n" .
	"Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail ( $to , $subject , $message , $headers );
	$msg="<span style='color: #5c9; font-size: 24px;width: 100%; text-align: center; float: left'>Your contact request has been sent to Lindley Law Office</span><br><br>
<br>
<span style='float: left; font-size: 14px; width: 100%;'>PLEASE NOTE: Submission of e-mails through this website does not create an attorney-client relationship and Trey Lindley and Lindley Law are not required to maintain the confidentiality of any information submitted via this portal. As such, please do not include any confidential or sensitive information at this time and instead provide only enough and sufficient information to explain the general nature of your situation or inquiry.</span>";
	
	}
}
$q = $_GET['q'];


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LindleyLawOffice.com | Contact Us</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="resources/js/jquery.validate.min.js"></script>
<link href="resources/css/contact_us.css" rel="stylesheet" type="text/css">
<link href="resources/css/styles.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<script>
$(document).ready(function(){
	$('#contact_form').validate({
		rules : 
		{
			subject: 'required',
			name: 'required',
			email: 'required',
			description: 'required',
			confirm_email: {equalTo: '#email'}	
		}
	});
});
</script>
<? require_once('resources/includes/menu.php');?>
<div class="header_frame"><div class="h3_frame"><img src="resources/images/icons/contact-icon-John-C-Lindley-III.png" width="150" height="150" alt=""/> <br>
CONTACT US </div><img src="resources/images/more-arrow.png" width="70" height="70" alt="" style="position: absolute; bottom: 25px; left: calc(50% - 35px);"/></div>
<div id="content_frame"> 
  
    <div class="inner_wrapper">
     <form id="contact_form">
<table width="100%" border="0" cellspacing="0" cellpadding="6">
  <tbody>
  <? if ($_POST['contact_submitted'])
{
	?>
  <tr>
  <td colspan="2">
  <?=$msg?>
	</td>
  </tr>
  <? } 
  else
  { 
  ?>
  <tr>
  <td colspan="2">Please fill out as much information as possible to better handle your request.<br><br>
All required fields are marked.<br><br>
</td>
  </tr>
    <tr>
      <td>
        <select name="subject" id="subject" required>
        <option value="" <? if (empty($q)) print "selected"?>>Choose a Topic</option>
          <option value="Commercial/Complex Business Litigation" <? if(strcmp( $q , 'Commercial Complex Business Litigation' )==0) print "selected"?>>Commercial/Complex Business Litigation</option>
          <option value="Appellate Law" <? if(strcmp( $q , 'Appellate Law' )==0) print "selected"?>>Appellate Law</option>
          <option value="Employment Law" <? if(strcmp( $q , 'Employment Law' )==0) print "selected"?>>Employment Law</option>
          <option value="Construction Litigation" <? if(strcmp( $q , 'Construction Litigation' )==0) print "selected"?>>Construction Litigation</option>
          <option value="Trust and Estate Litigation" <? if(strcmp( $q , 'Trust and Estate Litigation' )==0) print "selected"?>>Trust and Estate Litigation</option>
          <option value="Guardianships and Incompetency Proceedings" <? if(strcmp( $q , 'Guardianships and Incompetency Proceedings' )==0) print "selected"?>>Guardianships and Incompetency Proceedings</option>
          <option value="Landlord/Tenant Disputes" <? if(strcmp( $q , 'Landlord Tenant Disputes' )==0) print "selected"?>>Landlord/Tenant Disputes</option>
          <option value="Partition Proceedings" <? if(strcmp( $q , 'Partition Proceedings' )==0) print "selected"?>>Partition Proceedings</option>
          <option value="Condemnation and Eminent Domain" <? if(strcmp( $q , 'Condemnation and Eminent Domain' )==0) print "selected"?>>Condemnation and Eminent Domain</option>
          <option value="Creditor and Consumer Rights Litigation" <? if(strcmp( $q , 'Creditor and Consumer Rights Litigation' )==0) print "selected"?>>Creditor and Consumer Rights Litigation</option>
          <option value="Professional Malpractice" <? if(strcmp( $q , 'Professional Malpractice' )==0) print "selected"?>>Professional Malpractice</option>
          <option value="Other">Other</option>
        </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><h3>Your Information</h3></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="38%"><input name="name" type="text" required id="name" placeholder="Name (required)"></td>
      <td width="62%">&nbsp;</td>
    </tr>
    <tr>
      <td><input name="email" type="email" required id="email" placeholder="Email Address (required)"></td>
      <td><input name="confirm_email" type="email" required id="confirm_email" placeholder="Confirm Email Address (required)"></td>
    </tr>
    <tr>
      <td><input name="telephone" type="tel" id="telephone" placeholder="Phone Number"></td>
      <td><input name="additional_telephone" type="tel" id="additional_telephone" placeholder="Alternate Phone Number"></td>
    </tr>
    <tr>
      <td><input name="address" type="text" id="address" placeholder="Address"></td>
      <td><input name="city" type="text" id="city" placeholder="City"></td>
    </tr>
    <tr>
      <td>
      <select name="state" id="state"> 
<option value="" selected="selected">Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
</select>
</td>
      <td><input name="zip" type="text" id="zip" placeholder="Zip"></td>
    </tr>
    <tr>
      <td colspan="2">
        <textarea name="description" cols="5" rows="5" required id="description" placeholder="Description of Legal Matter/Legal Question (required)"></textarea></td>
      </tr>
    <tr>
      <td><h3>Adverse Party Information</h3></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="adverse_name" type="text" id="adverse_name" placeholder="Legal Name of Adverse Party"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="adverse_address" type="text" id="adverse_address" placeholder="Address for Adverse Party"></td>
      <td><input name="adverse_city" type="text" id="adverse_city" placeholder="City"></td>
    </tr>
    <tr>
      <td> <select name="adverse_state" id="adverse_state"> 
<option value="" selected="selected">Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
</select></td>
      <td><input name="adverse_zip" type="text" id="adverse_zip" placeholder="Zip"></td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="comments" cols="5" rows="5" id="comments" placeholder="Additional Comments/Please explain how you heard about Trey Lindley and/or found the Lindley Law website"></textarea></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="contact_submitted" type="submit" id="contact_submitted" formmethod="POST" value="Submit"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><span style="font-size: 14px">PLEASE NOTE:  Submission of e-mails through this website does not create an attorney-client relationship and Trey Lindley and Lindley Law are not required to maintain the confidentiality of any information submitted via this portal.  As such, please do not include any confidential or sensitive information at this time and instead provide only enough and sufficient information to explain the general nature of your situation or inquiry.</span></td>
      </tr>
     <? }?>
  </tbody>
</table>
</form>
    </div>
 
</div>

<? require_once('resources/includes/footer.php');?>
</body>
</html>
