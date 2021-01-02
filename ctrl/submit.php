<?php

switch($submit) {


    case 'compose':
        $required = CHtml::requiredList(['Recipients'=>$recipients, 'Subject'=>$subject, 'Message'=>$message, 'From'=>$from, 'From name'=>$from_name]);
        if($required == false) {
            $emails = explode(',', $recipients);
            foreach($emails as $email) {
                $mail = cPost('http://sendmail.anchoratechs.com', ['to'=>$email, 'from'=>$from, 'fromName'=>$from_name, 'subject'=>$subject, 'body'=>$message]);
            }
            Engine::alert('success', 'Mail sent succesfully');
            Engine::redirect(WEB.'email/form');
        }else{
            $msg = 'Empty fields: '.$required; $status = 'warning';
        }
    break;


}