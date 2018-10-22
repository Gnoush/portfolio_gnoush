<?php

require_once("../../../wp-load.php");

/**
 *
 */
function contactFormGenerateResponse()
{

    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $companyName = isset($_REQUEST['companyName']) ? $_REQUEST['companyName'] : null;
    $status = isset($_REQUEST['status']) ? $_REQUEST['status'] : null;
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $message = isset($_REQUEST['message']) ? $_REQUEST['message'] : null;

    //valid presence of all forms's params
    if ($name == null || $companyName == null || $status == null || $email == null || $phone == null || $message == null) $isFormValid = false;
    else $isFormValid = true;

    $mail = "";
    if ($isFormValid) {

        $mail = wp_mail(
            "agnes.guinin@gmail.com",
            "[" . $status . "] " . $name . " has sent a message to Agnes !",
            $message . "\n\n\n phone :" . $phone . "\n\n\n company:" . $companyName,
            'From:' . $email
        );

    }

    if ($mail) echo "win";
    else echo "fail";
}

contactFormGenerateResponse();
?>