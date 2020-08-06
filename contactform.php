
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];

    $mailTo= "askhatuly@gmail.com";
    $headers = "From: ".$name;
    $txt="Мой номер ".$number

    mail($mailTo,$headers,$txt);
    header("Location: contact.html?mailsend")


}