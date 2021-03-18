<?

// all project and sort by date last is frist
select * from Projects where Prj_Stat = 'New' ORDER by `Prj_postDate` DESC

// get project by user that have new proposal and sort by proposal date last is frist
SELECT `Prj_Name` FROM Projects, Proposals	 
	WHERE Projects.Prj_ID = Proposals.ProID 
	AND Projects.User_ID = 2 
	AND Proposals.ProStat= 'New'
	ORDER BY Proposals.ProDate DESC

// get user achievments where propsal status = Accepted and Project  status = Closed
SELECT `Prj_Name`, `Prj_Category`, Projects.User_ID , `Prj_Budget`, `Prj_Period` 
	FROM Projects,Proposals WHERE 
	Projects.Prj_ID = Proposals.Project_ID 
	AND Projects.Prj_Stat = 'Closed' 
	AND Proposals.ProStat = 'Accepted' 
	AND Proposals.User_ID = 2


//php function that send email with attachment
function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
 $file = $path.$filename;
 $file_size = filesize($file);
 $handle = fopen($file, "r");
 $content = fread($handle, $file_size);
 fclose($handle);
 $content = chunk_split(base64_encode($content));
 $uid = md5(uniqid(time()));
 $header = "From: ".$from_name." <".$from_mail.">\r\n";
 $header .= "Reply-To: ".$replyto."\r\n";
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
 $header .= "This is a multi-part message in MIME format.\r\n";
 $header .= "--".$uid."\r\n";
 $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
 $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
 $header .= $message."\r\n\r\n";
 $header .= "--".$uid."\r\n";
 $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
 $header .= "Content-Transfer-Encoding: base64\r\n";
 $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
 $header .= $content."\r\n\r\n";
 $header .= "--".$uid."--";
 if (mail($mailto, $subject, "", $header)) {
 echo "mail send ... OK"; // or use booleans here
 } else {
 echo "mail send ... ERROR!";
 }
}
//using this function 
$my_file = "somefile.zip";
$my_path = "/your_path/to_the_attachment/";
$my_name = "Olaf Lederer";
$my_mail = "my@mail.com";
$my_replyto = "my_reply_to@mail.net";
$my_subject = "This is a mail with attachment.";
$my_message = "Hallo,rndo you like this script? I hope it will help.rnrngr. Olaf";
mail_attachment($my_file, $my_path, "recipient@mail.org", $my_mail, $my_name, $my_replyto, $my_subject, $my_message);



// ********************** another way to send email with attachment***********************
// To use PHPMailer:
// 
// Download the PHPMailer script from here: http://github.com/PHPMailer/PHPMailer
// Extract the archive and copy the script's folder to a convenient place in your project.
// Include the main script file -- require_once('path/to/file/class.phpmailer.php');
// Now, sending emails with attachments goes from being insanely difficult to incredibly easy:

$email = new PHPMailer();
$email->From      = 'you@example.com';
$email->FromName  = 'Your Name';
$email->Subject   = 'Message Subject';
$email->Body      = $bodytext;
$email->AddAddress( 'destinationaddress@example.com' );

$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

return $email->Send();
//********************************** end **********************************************
?>