<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'acevskanena01@gmail.com'; // Enter your email address here
  $subject = 'Имате нова порака од';
  $message_body = "Име: $name\nЕ-маил: $email\n\n$message";

  if (mail($to, $subject, $message_body)) {
    echo 'Успешно испративте порака!';
  } else {
    echo 'Настана грешка, обидете се повторно!';
  }
}
?>
