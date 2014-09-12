<?php
 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
class Volkswagen
{
  //{fullName} , {email}, {comment}
  public $configs = '';
 
  public function __construct()
  {
    $this->configs = include('assets/config/webconfig.php');
  }

  public function email_send_function(){
    $name = isset($_POST['username']) ? $_POST['username'] : '';;
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
    $cellphone = isset($_POST['cellphone']) ? $_POST['cellphone'] : '';

    $to      = $this->configs['emailTo'];
    $subject = $this->configs['subject'];
    $message = str_replace($this->configs['emailStructureSearchKeys'], array($name, $email, $cellphone, $comment),$this->configs['emailStructure']);

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$this->configs['emailFrom']. "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)){
      echo 'Success Service';
    }else{
      echo 'Error Service';
    }
  }
}
// Create a new object
$obj = new Volkswagen;
if (isset($_POST['action']) && strpos(apache_request_headers()['Origin'],'tnt.cr') !== false ){
  $funcName  = $_POST['action'];
  $obj->$funcName();
} 
else{
  echo 'Error On the site services';
}
?>