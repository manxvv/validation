<?php ob_start();

$firstname=$_REQUEST['firstname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['message'];

 $message = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="600" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" height="50" colspan="3" style="font-family:Trebuchet MS;  font-size:16px; color:#666; border:1px solid #e8dada; border-bottom:none; padding-left:10px;"><strong>Contact Information</strong></td>
            </tr>
            <tr>
              <td width="160" height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none;">Full Name</td>
              <td width="20" align="center" style="font-weight:bold; border:1px solid #e8dada;">:</td>
              <td width="390" align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none;">'.$firstname.'</td>
            </tr>
          
            <tr>
            
            <td height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none;">Email</td>
            <td align="center" style="font-weight:bold; border:1px solid #e8dada;">:</td>
            <td align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none;">'.$email.'</td>
            
            </tr>
            			
			<tr>
              <td height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none; border-top:none;">Phone Number</td>
              <td align="center" style="font-weight:bold; border:1px solid #e8dada; border-top:none;">:</td>
              <td align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none; border-top:none;">'.$phone.'</td>
            </tr>
            <tr>
              <td height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none; border-top:none;">Message</td>
              <td align="center" style="font-weight:bold; border:1px solid #e8dada; border-top:none;">:</td>
              <td align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none; border-top:none;">'.$message.'</td>
            </tr>
			
        </table></td>
      </tr>
    </table>';


 //exit;
$to = "nitin.gupta@doneimages.com";
$subject = "Get Quote";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: doneimages@webpage4demo.com'. "\r\n";
$headers .= 'Cc: nikesh.khulbe@whitevox.com' . "\r\n";

$send = mail($to,$subject,$message,$headers);

?>

  <script>
    window.location.href="https://doneimages.com/photo-editing-company/thankyou.html" 
  </script>



