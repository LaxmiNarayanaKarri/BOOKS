<?php
function mailing()
{
session_start();
require 'PHPMailerAutoload.php';
$mail = new PHPMailer();
	$email=$_SESSION['to'];
	$mg=$_SESSION['msg'];
	$sub=$_SESSION['sub'];
    $mail->SMTPDebug = 3;                      //Enable verbose debug output
    //$mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'books@allforbooks.co.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'books@allforbooks.co.in';                     //SMTP username
    $mail->Password   = 'Narayana2349';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('books@allforbooks.co.in', 'books');
    $mail->addAddress($email,'to you');     //Add a recipient
    $mail->addAddress($email);               //Name is optional
    $mail->addReplyTo('books@allforbooks.co.in', 'Information');
    $mail->addCC('books@allforbooks.co.in');
    $mail->addBCC('books@allforbooks.co.in');
    
        //Optional name


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    
    $message="<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
<!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"x-apple-disable-message-reformatting\">
  <!--[if !mso]><!--><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
  <title></title>
  
    <style type=\"text/css\">
      table, td { color: #000000; } a { color: #0000ee; text-decoration: underline; }
@media only screen and (min-width: 620px) {
  .u-row {
    width: 600px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-100 {
    width: 600px !important;
  }

}

@media (max-width: 620px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: calc(100% - 40px) !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors='true'] {
  color: inherit !important;
  text-decoration: none !important;
}

</style>
  
  

<!--[if !mso]><!--><link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap\" rel=\"stylesheet\" type=\"text/css\"><!--<![endif]-->

</head>

<body class=\"clean-body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f0f0f0;color: #000000\">
  <!--[if IE]><div class=\"ie-container\"><![endif]-->
  <!--[if mso]><div class=\"mso-container\"><![endif]-->
  <table style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f0f0f0;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
  <tbody>
  <tr style=\"vertical-align: top\">
    <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
    <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color: #f0f0f0;\"><![endif]-->
    

<div class=\"u-row-container\" style=\"padding: 20px 10px;background-color: #0e3a52\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 20px 10px;background-color: #0e3a52;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
  
<table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
        
  <div style=\"color: #ffffff; line-height: 160%; text-align: center; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 160%;\"><span style=\"font-family: 'Open Sans', sans-serif; font-size: 36px; line-height: 57.6px;\">WELCOME TO
    <br>
    ALLFORBOOKS</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>
<table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
        
  <div style=\"color: #ffffff; line-height: 160%; text-align: center; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 160%;\"><span style=\"font-family: 'Open Sans', sans-serif; font-size: 36px; line-height: 57.6px;\"> $mg </span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
        
  <div style=\"color: #ffffff; line-height: 160%; text-align: center; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 160%;\"><span style=\"font-family: 'Open Sans', sans-serif; font-size: 36px; line-height: 57.6px;\">LET'S MAKE THE RIGHT USE OF BOOKS.</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class=\"u-row-container\" style=\"padding: 15px 10px 30px;background-image:url('http://www.allforbooks.co.in/image-1.png');background-repeat: repeat;background-position: left top;background-color: #0e3a52\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
  
<table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td style=\"overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:'Open Sans',sans-serif;\" align=\"left\">
        
<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
  <tr>
    <td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
      
      <img align=\"center\" border=\"0\" src='http://www.allforbooks.co.in/image-2.png'; alt=\"Image\" title=\"Image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 223px;\" width=\"223\"/>
      
    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class=\"u-row-container\" style=\"padding: 20px 10px 35px;background-color: #1cb0b8\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 20px 10px 35px;background-color: #1cb0b8;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
  
<table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td style=\"overflow-wrap:break-word;word-break:break-word;padding:20px 20px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
        
<div align=\"center\">
  <!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:'Open Sans',sans-serif;\"><tr><td style=\"font-family:'Open Sans',sans-serif;\" align=\"center\"><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"home\" style=\"height:126px; v-text-anchor:middle; width:560px;\" arcsize=\"33.5%\" stroke=\"f\" fillcolor=\"#0e3a52\"><w:anchorlock/><center style=\"color:#1cb0b8;font-family:'Open Sans',sans-serif;\"><![endif]-->
    <a href=\"http://www.allforbooks.co.in/home\" target=\"_blank\" style=\"box-sizing: border-box;display: inline-block;font-family:'Open Sans',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #1cb0b8; background-color: #0e3a52; border-radius: 42px; -webkit-border-radius: 42px; -moz-border-radius: 42px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;\">
      <span style=\"display:block;padding:20px 30px;line-height:120%;\"><span style=\"font-size: 36px; line-height: 43.2px;\">TO OPEN OUR WEBSITE CLICK ON THIS.<br /></span></span>
    </a>
  <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
</div>

      </td>
    </tr>
  </tbody>
</table>

<table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 20px;font-family:'Open Sans',sans-serif;\" align=\"left\">
        
  <div style=\"color: #ffffff; line-height: 300%; text-align: center; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 300%;\"><span style=\"font-size: 16px; line-height: 48px;\">THANK YOU FOR VISITING US.
    <br>
        HAVE A NICE DAY👍.</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>";
    $mail->Subject ='ALL FOR BOOKS.CO.IN';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  
} 
    

?>
