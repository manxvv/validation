<?php
ob_start();
$fname=$_REQUEST['fname'];
$emailid=$_REQUEST['emailid'];
$phonenumber=$_REQUEST['phonenumber'];
$messages=$_REQUEST['messages'];

 $message = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="600" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" height="50" colspan="3" style="font-family:Trebuchet MS;  font-size:16px; color:#666; border:1px solid #e8dada; border-bottom:none; padding-left:10px;"><strong>Contact Information</strong></td>
            </tr>
            <tr>
              <td width="160" height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none;">Full Name</td>
              <td width="20" align="center" style="font-weight:bold; border:1px solid #e8dada;">:</td>
              <td width="390" align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none;">'.$fname.'</td>
            </tr>
          
            <tr>
            
            <td height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none;">Email</td>
            <td align="center" style="font-weight:bold; border:1px solid #e8dada;">:</td>
            <td align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none;">'.$emailid.'</td>
            
            </tr>
            			
			<tr>
              <td height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none; border-top:none;">Phone Number</td>
              <td align="center" style="font-weight:bold; border:1px solid #e8dada; border-top:none;">:</td>
              <td align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none; border-top:none;">'.$phonenumber.'</td>
            </tr>
            <tr>
              <td height="36" align="left" style="font-family:Tahoma; font-size:12px; color:#666; border:1px solid #e8dada; padding-left:10px; border-right:none; border-top:none;">Message</td>
              <td align="center" style="font-weight:bold; border:1px solid #e8dada; border-top:none;">:</td>
              <td align="left" style="font-family:Tahoma; font-size:12px; color:#666; font-weight:bold; border:1px solid #e8dada; padding-left:10px; border-left:none; border-top:none;">'.$messages.'</td>
            </tr>
			
        </table></td>
      </tr>
    </table>';
    
$to = "nirmal.singh@whitevox.com";
$subject = "My subject";





// $txt = "Hello world!";
$headers = "From: test@webpage4demo.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$message,$headers);


?>


