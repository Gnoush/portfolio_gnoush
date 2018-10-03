<?php

require_once("../../../wp-load.php");

/**
 *
 */
function contactFormGenerateResponse()
{
    echo "teast";

    $name = $_POST['name'] != null ? $_POST['name'] : null;
    $companyName = $_POST['companyName'] != null ? $_POST['companyName'] : null;
    $status = $_POST['status'] != null ? $_POST['status'] : null;
    $email = $_POST['email'] != null ? $_POST['email'] : null;
    $phone = $_POST['phone'] != null ? $_POST['phone'] : null;
    $message = $_POST['message'] != null ? $_POST['message'] : null;

    //valid presence of all forms's params
    if ($name == null || $companyName == null || $status == null || $email == null || $phone == null || $message == null) $isFormValid = false;
    else $isFormValid = true;

    echo "test";

    var_dump($isFormValid);

    $mail = "";
    //Inform user through a modal
    if ($isFormValid) {

        $mail = wp_mail("chazal.florian@gmail.com", $name . " has sent a message to Gnoush!", $message . "<br><br><br> phone :" . $phone . "<br><br><br> ");

        var_dump("test");
    }

    if ($mail) var_dump("win");
    else echo var_dump("fail");
}

contactFormGenerateResponse();
?>