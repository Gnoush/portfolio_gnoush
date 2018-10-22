<?php

require_once("../../../wp-load.php");

/**
 * Send an email to agnes.guinin@gmail.com, based on the informations received through $_REQUEST
 *
 * Ensure the presence of all required attributes. if one is missing, abort request
 * else if all attributes are not null, create and send a Mail through the built-in Wordpress mail method wp_mail
 *
 * Required attributes are :
 * - name
 * - companyName
 * - status
 * - phone
 * - message
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