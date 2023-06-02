<?php
    if (mail('nakacheya@gmail.com@', 'Mail Test', 'This is a test email.')) {
        echo 'The mail function is enabled on your server.';
    } else {
        echo 'The mail function is disabled or not properly configured on your server.';
    }
?>