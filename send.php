
<!-- Default PHP file for form submit, might have to change later depending on GoDaddy hosting information -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName     = htmlspecialchars($_POST["firstName"]);
  $lastName      = htmlspecialchars($_POST["lastName"]);
  $businessName  = htmlspecialchars($_POST["businessName"]);
  $businessType  = htmlspecialchars($_POST["businessType"]);
  $email         = htmlspecialchars($_POST["email"]);
  $phone         = htmlspecialchars($_POST["phone"]);
  $contactMethod = htmlspecialchars($_POST["contactMethod"]);

  $to      = "you@yourdomain.com";
  $subject = "New Inquiry from $firstName $lastName";
  $body    = "
    Name: $firstName $lastName
    Business: $businessName
    Work Needed: $workNeeded
    Email: $email
    Phone: $phone
    Preferred Contact: $contactMethod
  ";
  $headers  = "From: noreply@yourdomain.com\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>