<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require (BASEPATH.'libraries/PHPMailerAutoload.php');
require(BASEPATH.'libraries/class.phpmailer.php');

class main extends CI_Controller {

	public function index(){
		$this->load->view('Portfolio');
	}
	public function home(){
		$this->load->view('Portfolio');
	}
	public function emailconfirm(){
		$this->load->view('PortfolioEmail');
	}
	public function OOPDemo(){
		$this->load->view('OOPDemo');
	}
	public function starwars(){
		$this->load->view('starwars');
	}
	public function UX(){
		$this->load->view('UX');
	}
	public function sendemail(){
		$email = $this->input->post();
		$mail = new PHPMailer;
			if($email != null){
				//security for email injections
					if (preg_match("/%0A/i", $email['email']) || preg_match("/%0D/i", $email['email']) || preg_match("/\\r/i", $email['email']) || preg_match("/\\n/i", $email['email']))  {
	    				die("Injection detected in address! Security Analytics enabled.");
					}else if (preg_match("/%0A/i", $email['name']) || preg_match("/%0D/i", $email['name']) || preg_match("/\\r/i", $email['name']) || preg_match("/\\n/i", $email['name'])) {
	    				die("Injection detected in username! Security Analytics enabled");
					}else if (preg_match("/%0A/i", $email['message']) || preg_match("/%0D/i", $email['message']) ){
						die("Injection detected in note! Security Analytics enabled");
					}else{
						$mail->addAddress('lew4f08@gmail.com');
						$mail->isSMTP();
						// $mail->SMTPDebug = 4;                            // Enable verbose debug output
						$mail->Host = "smtp.gmail.com"; 					// Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                             // Enable SMTP authentication
						$mail->Username = 'pmmanaged@gmail.com';            // SMTP username
						$mail->Password = 'pmpcert2016';                    // SMTP password
						$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 587;
						$mail->setFrom($email['email'], $email['name']);
						$mail->isHTML(true);
						$mail->Subject = 'Interest in your work';
						$mail->Body    = $email['message'].'<br>'.$email['email'];
						  if(!$mail->send()) {
							  echo 'Message could not be sent.';
							  echo 'Mailer Error: ' . $mail->ErrorInfo;
						  }
						 redirect('main/emailconfirm');
			   		}
				}

	}
}
