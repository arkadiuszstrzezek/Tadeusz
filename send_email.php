<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "admin@portalarekmicrosoftcom.onmicrosoft.com";
    $subject = "Nowa wiadomość ze strony MercEcu";
    
    $email_content = "Imię i nazwisko: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Wiadomość:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    if(mail($to, $subject, $email_content, $headers)) {
        echo "<script>
                alert('Dziękujemy za wiadomość. Odpowiemy najszybciej jak to możliwe.');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script>
                alert('Przepraszamy, wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.');
                window.location.href = 'index.html';
              </script>";
    }
}
?>