<?php
/**
 * 新建页默认模板
 * Created by PhpStorm.
 * User: 云南智莱商贸有限公司
 * 网站 : http://ynzhilai.con
 * Date: 2017/4/4
 * Time: 20:23
 */
namespace phpmailer;
use phpmailer\Phpmailer;
use think\Exception;
class Email
{
	/**
	 * 方法
	 * @function  send 方法名
	 *
	 * @param $to
	 * @param $title
	 * @param $content
	 *
	 * @return bool  返回值
	 */
	public static function send($to, $title, $content)
	{
		date_default_timezone_set('PRC');//set time
		if ( empty($to) ) {
			return FALSE;
		}
		try {
//Create a new PHPMailer instance
			$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
			$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
			//$mail->SMTPDebug = 2;   //这里不注释就会输出代码
//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
//Set the hostname of the mail server
			$mail->Host = config('email.host');
//Set the SMTP port number - likely to be 25, 465 or 587
			$mail->Port = config('email.port');
//Whether to use SMTP authentication
			$mail->SMTPAuth = TRUE;
//Username to use for SMTP authentication
			$mail->Username = config('email.username');
//Password to use for SMTP authentication
			$mail->Password = config('email.password');
//Set who the message is to be sent from
			$mail->setFrom(config('email.username'), 'ynzhilai');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
			$mail->addAddress($to, '云南智莱qq邮件');
//Set the subject line
			$mail->Subject = $title;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($content);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
			if (!$mail->send()) {
				//echo "Mailer Error: " . $mail->ErrorInfo;
				return FALSE;
			} else {
				//echo "Message sent success!";
				return TRUE;
			}
		}catch (phpmailerException $e){
			return FALSE;
		}
	}
}
