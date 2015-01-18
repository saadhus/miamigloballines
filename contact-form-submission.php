<?php  
  
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: contact-form.php"); exit;  
}  
      
// get the posted data  
$company = $_POST["contact_company"]; 
$name = $_POST["contact_name"];  
$email_address = $_POST["contact_email"];  
$suject = $_POST["contact_subject"];  
$message = $_POST["contact_message"];  
      
          
// write the email content  
$email_content = "Company: $company\n";  
$email_content .= "Name: $name\n";  
$email_content .= "Email Address: $email_address\n";  
$email_content .= "Subject: $subject\n";  
$email_content .= "Message:\n\n$message";  
      
// send the email  
mail ("hh@miamigloballines.com", "New Contact Message", $email_content);  
      
// send the user back to the form  
header("Location: Thank+you+for+your+message.html?s=".urlencode("Thank you for your message.")); exit;  
  
?>  