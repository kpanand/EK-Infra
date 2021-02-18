if (isset($_POST['submit'])){
    $email_from = $_POST['email'];
    $subject = "Get notified from Website";

    $mailTo = "chaitanya2561@gmail.com";
    $headers = "From: ".$email_from;
    $txt = "You have received an e-mail from ".$email_from.".\n\n";

    mail($mailTo, $txt, $headers, $subject);
    header("Location: index.php?mailsend");
}