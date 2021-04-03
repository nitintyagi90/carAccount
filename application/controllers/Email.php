<?php 

class Email extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Email');
	}

	

    public function email()
    {     
           echo("hello");
            $config['protocol'] = 'smtp'; // mail, sendmail, or smtp    The mail sending protocol.
            $config['smtp_host'] = 'localhost'; // SMTP Server Address.
            $config['smtp_user'] = 'anuragkipm751@gmail.com'; // SMTP Username.
            $config['smtp_pass'] = '1675110009'; // SMTP Password.
            $config['smtp_port'] = '25'; // SMTP Port. 25 is for local host
          
            $config['smtp_timeout'] = '200'; // SMTP Timeout (in seconds).
            $config['wordwrap'] = TRUE; // TRUE or FALSE (boolean)    Enable word-wrap.
            $config['wrapchars'] = 76; // Character count to wrap at.
            $config['mailtype'] = 'html'; // text or html Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don't have any relative links or relative image paths otherwise they will not work.
            $config['charset'] = 'utf-8'; // Character set (utf-8, iso-8859-1, etc.).
            $config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
            $config['priority'] = 3; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
            $config['crlf'] = "\r\n"; // "\r\n" or "\n" or "\r" Newline character. (Use "\r\n" to comply with RFC 822).
            $config['newline'] = "\r\n"; // "\r\n" or "\n" or "\r"    Newline character. (Use "\r\n" to comply with RFC 822).
            $config['bcc_batch_mode'] = FALSE; // TRUE or FALSE (boolean)    Enable BCC Batch Mode.
            $config['bcc_batch_size'] = 200; // Number of emails in each BCC batch.

		$this->load->library('email');

           $this->email->from('anuragkipm751@gmail.com', 'Admin'); 
            $this->email->to('anuragkipm751@gmail.com'); 
           // $this->email->cc('anuragsrivastav253@gmail.com.com');
           // $this->email->bcc('anuragkipm751@gmail.com');

            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
            $this->email->initialize($config);
           
           $suc =$this->email->send();
         
            if($suc)
              {
               
                return true;
                echo("sended");
              }
            else
              {
                echo ("hii");
                return false;
              }
	}
}