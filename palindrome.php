<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
    <title>Palindrome Function call</title>
</head>
<body>
    <?php
    // isset: Determine if a variable is set and is not NULL
    if(isset($_POST['testWord'])) {
        // run function check_palindrome if user enters word
        echo check_palindrome($_POST['testWord']);
    }
    function check_palindrome($string){
        if($string === strrev($string))
            return 'yes';
        else
            return 'no';    
    }
    ?>