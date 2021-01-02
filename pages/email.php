<?php
switch($type) {

    case 'sent':
        require('./email.sent.php');
    break;

    default:
        require('email.form.php');
    break;

}