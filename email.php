<?php
$bcc="akhilesh.kumar@digitalwebsolutions.in,";
$cc="akhilesh.kumar@digitalwebsolutions.in,john.bent@tizinc.com";

$kydex_physical_sample = $_POST['physical_sample_kydex'];
$allen_physical_sample = $_POST['physical_sample'];

if($kydex_physical_sample == 'Yes' || $allen_physical_sample == 'Yes') {
  $physical_sample_message = '<tr>
     <td bgcolor="#ffffff" style="padding: 20px 30px 20px 35px;border:0;" >
         <table border="1" cellpadding="0" cellspacing="0" width="100%%"  bordercolor="#cccccc" style="padding:20px 20px 20px 20px" bgcolor="#ec0928">
             <tr>
                 <td style="padding: 0px 0 10px 0px; font-family: Helvetica, sans-serif; font-size: 16px; font-weight:700; border: 0;color:#fff;">
                     Send physical samples and a copy of this email to
                 </td>
             </tr>
             <tr>
                 <td style="padding: 5px 0 5px 0; font-family: Helvetica, sans-serif; font-size: 16px;border: 0;font-weight:400;color:#fff; line-height: 22px;">
                     <span style="font-weight:700;">SEKISUI SPI</span><br>
                     ATTN: designLab® Colour Development <br>
                     6685 Low Street<br>
                     Bloomsburg, PA 17815<br>
                 </td>
             </tr>
         </table>
     </td>
 </tr>';
} else {
  $pysical_sample_message = '<tr><td></td></tr>';
}

//$bcc = "john.bent@tizinc.com";
//$cc = "john.bent@tizinc.com";

$to = $_POST['email_user'];

$subject = "Colour Matching";

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta name="viewport" content="width=device-width">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Softlon LHR interest email</title>

 <style type="text/css">
 body { width: 100% !important; background-color: #ffffff; margin: 0; padding: 0;}
 .ReadMsgBody { width: 100%; }
 .ExternalClass { width: 100%; display:block !important; } /* Force Hotmail to display emails at full width */
 table.w600{ width:600px;}
 table.w540{ width:540px;}
 .hero {width:100%;}
 .button {width: 100%; font-size:20px;}
 .logo {width:262px;}
 #background-table {width: 600px;}
 </style>

 <style type="text/css">

 @media only screen and (max-width: 599px) {

 #background-table {width: 100% !important;}
 }

 @media only screen and (max-width: 599px) {

 table[class=w540], td[class=w540]{ width:90% !important; max-width:540px; }
 img[class=logo] { width:100% !important; max-width:262px !important; border:none; }
 table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide], tr[class*=hide] { display:none !important; }
 }

 </style>
 </head>
 </head>
 <table class="body" width="100%" cellpadding="0" cellspacing="0">
 <!-- SUPER IMPORTANT -->
 <tbody>
 <tr class="hide">
 <td height="20" bgcolor="#75787b">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#75787b">

 <!-- HEADER --><!-- END HEADER -->

 <!-- BODY -->
 <table id="background-table" border="0" align="center" cellpadding="0" cellspacing="0">
 <tbody>
 <tr>
 <td height="80" align="left" bgcolor="#f2f6f3" class="w600"><img src="https://sekisui-spi.com/colour-matching/images/logo-email.jpg" alt="SEKISUI SPI" class="logo" border="0" /></td>
 </tr>
 <tr bgcolor="#222222">
 <td align="center" bgcolor="#ffffff"><img src="https://sekisui-spi.com/colour-matching/images/email-banner1.jpg" alt="Softlon LHR Info Request" class="hero" border="0"/></td>
 </tr>
 <tr>';

// Allen Product Data
if($_POST['disable_product_line_allen']){

   $message .= '<tr>
   <td height="30" align="left" valign="top" style="color:#000000; background: #ffffff; font-size:16px; font-family:Helvetica,Arial,sans-serif;"><strong>ALLEN PRODUCT DATA</strong><br /></td>
   </tr>
   <tr>
   <td><table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-width:1px; border-style: solid; border-color:#cccccc; background:#ffffff;">
   <tbody>
   <tr><!-- begin product data table | allen data-->
   <td align="center"><table width="90%" border="0" cellspacing="0" cellpadding="0">
   <tbody>
   <tr>
   <td>&nbsp;</td>
   </tr>';

   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;">
   <strong>Product Line: </strong> '.$_POST['disable_product_line_allen'].'
   </td>
   </tr>';

   if($_POST['product_selection_series']) {
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Product Series: </strong> '.$_POST['product_selection_series'].' </td>
   </tr>';
   }
   if($_POST['product_selection']){
   $message .= '<tr><td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Product: </strong> '.$_POST['product_selection'].'</td>
   </tr>';
   }
   if($_POST['product_type_selection']){
   $message .='<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Product Type: </strong> '.$_POST['product_type_selection'].'</td>
   </tr>';
   }
   if($_POST['uv_selection']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>UV Inhibitor Package <i>Line One</i>: </strong> '.$_POST['uv_selection'].'</td>
   </tr>';
   }
   if($_POST['product_fda_selection']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>FDA: </strong> '.$_POST['product_fda_selection'].'</td>
   </tr>';
   }
   if($_POST['matalic_effect_selection']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Metallic Effect: </strong> '.$_POST['matalic_effect_selection'].'</td>
   </tr>';
   }
   if($_POST['uv_selection']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>UV Film Required: </strong> '.$_POST['uv_selection'].'</td>
   </tr>';
   }
   if($_POST['ul_required']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>UL Required: </strong> '.$_POST['ul_required'].'</td>
   </tr>';
   }
   if($_POST['ul_type']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>UL Type: </strong> '.$_POST['ul_type'].'</td>
   </tr>';
   }
   if($_POST['enduse']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>End Use: </strong> '.$_POST['enduse'].'</td>
   </tr>';
   }
   if($_POST['physical_sample']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Are you sending physical samples to match? </strong> '.$_POST['physical_sample'].'</td>
   </tr>';
   }
   if($_POST['return_sample']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Return Sample: </strong> '.$_POST['return_sample'].'</td>
   </tr>';
   }
   if($_POST['approval_process_allen']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Approval Process: </strong> '.$_POST['approval_process_allen'].'</td>
   </tr>';
   }
   if($_POST['primary_light_allen']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Primary Light Source: </strong> '.$_POST['primary_light_allen'].'</td>
   </tr>';
   }
   if($_POST['primary_light_allen']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Other: </strong> '.$_POST['primary_light_allen'].'</td>
   </tr>';
   }
   if($_POST['selected_date_allen']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Date Required: </strong> '.$_POST['selected_date_allen'].'</td>
   </tr>';
   }
}

// Kydex Product Data
if($_POST['disable_product_line_kydex']){
    $message .= '<tr>
   <td height="30" align="left" valign="top" style="color:#000000; background: #ffffff; font-size:16px; font-family:Helvetica,Arial,sans-serif;"><strong>KYDEX PRODUCT DATA</strong><br /></td>
   </tr>
   <tr>
   <td><table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-width:1px; border-style: solid; border-color:#cccccc; background: #ffffff;">
   <tbody>
   <tr><!-- begin product data table | allen data-->
   <td align="center"><table width="90%" border="0" cellspacing="0" cellpadding="0">
   <tbody>
   <tr>
   <td>&nbsp;</td>
   </tr>';
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;">
   <strong>Product Line: </strong> '.$_POST['disable_product_line_kydex'].'
   </td></tr>';
   if($_POST['product_selection']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Product: </strong> '.$_POST['product_selection'].'</td>
   </tr>';
   }
   if($_POST['productthickness']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Product Thickness: </strong> '.$_POST['productthickness'].'</td>
   </tr>';
   }
   if($_POST['producttexture']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Product Texture: </strong> '.$_POST['producttexture'].'</td>
   </tr>';
   }
   if($_POST['enduse_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>End Use: </strong> '.$_POST['enduse_kydex'].'</td>
   </tr>';
   }
   if($_POST['physical_sample_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Are you sending physical samples to match? </strong> '.$_POST['physical_sample_kydex'].'</td>
   </tr>';
   }
   if($_POST['approval_process_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Approval Process: </strong> '.$_POST['approval_process_kydex'].'</td>
   </tr>';
   }
   if($_POST['primary_light_source_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Primary Light Source: </strong> '.$_POST['primary_light_source_kydex'].'</td>
   </tr>';
   }
   if($_POST['primary_light_other_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Other: </strong> '.$_POST['primary_light_other_kydex'].'</td>
   </tr>';
   }
   if($_POST['unit_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Units: </strong> '.$_POST['unit_kydex'].'</td>
   </tr>';
   }
   if($_POST['description_of_colour_kydex']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Description of Colour Submission / Cross References: </strong> '.$_POST['description_of_colour_kydex'].'</td>
   </tr>';
   }
   if($_POST['specialrequest']){
   $message .= '<tr>
   <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Special Requests / Comments: </strong> '.$_POST['specialrequest'].'</td>
   </tr>';
   }
}

// contact Data
$message .= '<tr>
<td height="30" align="left" valign="top" style="color:#000000; background:#ffffff; font-size:16px; font-family:Helvetica,Arial,sans-serif;"><strong>CONTACT INFORMATION</strong><br /></td>
</tr>
<tr>
<td><table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-width:1px; border-style: solid; border-color:#cccccc background: #ffffff;">
<tbody>
<tr><!-- begin product data table | allen data-->
<td align="center"><table width="90%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>&nbsp;</td>
</tr>';

if($_POST['fstname']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>First Name: </strong> '.$_POST['fstname'].'</td>
  </tr>';
}
if($_POST['lastname']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Last Name: </strong> '.$_POST['lastname'].'</td>
  </tr>';
}
if($_POST['company']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Company: </strong> '.$_POST['company'].'</td>
  </tr>';
}
if($_POST['street']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Street: </strong> '.$_POST['street'].'</td>
  </tr>';
}
if($_POST['streetline2']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Street | Line 2: </strong> '.$_POST['streetline2'].'</td>
  </tr>';
}
if($_POST['streetline3']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Street Line 3: </strong> '.$_POST['streetline3'].'</td>
  </tr>';
}
if($_POST['city']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>City: </strong> '.$_POST['city'].'</td>
  </tr>';
}
if($_POST['state']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>State: </strong> '.$_POST['state'].'</td>
  </tr>';
}
if($_POST['postalcode']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Postal Code: </strong> '.$_POST['postalcode'].'</td>
  </tr>';
}
if($_POST['phone']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Phone: </strong> '.$_POST['phone'].'</td>
  </tr>';
}
if($_POST['Countryselection']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Country: </strong> '.$_POST['Countryselection'].'</td>
  </tr>';
}
if($_POST['sekisui']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>SEKISUI SPI Representative: </strong> '.$_POST['sekisui'].'</td>
  </tr>';
}
if($_POST['email_user']) {
  $message .= '<tr>
  <td height="30" align="left" style="color:#000000; font-size:15px; background: #ffffff; font-family:Helvetica,Arial,sans-serif;"><strong>Email: </strong> '.$_POST['email_user'].'</td>
  </tr>';
}



$message.= $physical_sample_message;


// end of table and html
$message .= '</tbody>
 </table></td>
 </tr>
 <tr><td height="30">&nbsp;</td></tr>
 </tbody>
 </table></td>
 </tr>
 <tr>
 <td align="center">
 <table class="w540" border="0" align="center" cellpadding="0" cellspacing="0"><!-- bg and footer -->
 <tbody>
 <tr>
 <td height="30" align="center">&nbsp;</td>
 </tr>
 <tr>
 <td align="center" style="color:#ffffff; background: #cccccc; font-size:14px; font-family:Helvetica,Arial,sans-serif;">&copy; 2019 SEKISUI Polymer Innovations,&nbsp;LLC. All&nbsp;Rights&nbsp;Reserved.<br />
 <br />
 <strong>SEKISUI SPI</strong><br />
 6685 Low St, Bloomsburg, PA 17815 USA<br />
 800.325.3133 | +1.570.387.6997 | info@sekisui-spi.com<br><unsubscribe style="color:#838383;text-decoration:underline;"></unsubscribe></td>
 </tr>
 <tr>
 <td height="30" align="center">&nbsp;</td>
 </tr>
 </tbody>
 </table></td>
 </tr>
 </tbody>
 </table>
 <!-- END BODY -->
 <!-- FOOTER --><!-- END FOOTER -->
 </td>
 </tr>
</tbody>
</table>
</body></html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\n";

// More headers
$headers .= 'From: <info@sekisui-spi.com>' . "\n";
$headers .= 'Cc: '.$cc. "\n";
$headers .='Bcc: '.$bcc. "\n";

mail($to,$subject,$message,$headers);

var_dump($_POST);

?>
