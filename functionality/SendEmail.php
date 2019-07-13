<?php
//Poruka o dostupnosti automobila(da li je slobodan ili ne)

//Ako je automobil dostupan da se iznajmi posalji email u drugom slucaju nemoj da slajes email
if($result == "yes"){ 
$to = "filip88ks@gmail.com";
$subject = "Rezervacija automobila preko web sajta";

$message = "
<html>
<head>
<title>Rezervacija automobila</title>
</head>
<body>
    <p>Rezervacija automobila za korisnika $email</p>
    <table>
    <tr>
        <th>Lokacija preuzimanja</th>
        <th>Datum preuzimanja</th>
        <th>Datum vracanja</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Automobil</th>
    </tr>
    <tr>
        <td>$location</td>
        <td>$startDate</td>
        <td>$endDate</td>
        <td>$email</td>
        <td>$phone</td>
        <td>$type</td>
    </tr>

    </table>
 
</body>
</html>
";

$headers = "From: $email" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

$resultEmail = mail($to, $subject, $message, $headers);

if(!$resultEmail) {
    $msg = "Error";
}else{
    $msg = "Success";
}
$msgSuccess = "Uspesno ste iznajmili automobil, uskoro cemo vas kontaktirati.";
header("Location:index.php?msg=$msg&available=$msgSuccess");
//Ako automobil nije slobodan idi u else i nemoj slati email vec samo ispisi poruku automobil nije slobodan.
}else{
    $msgErr = "Automobil nije slobodan.";
    header("Location:index.php?msg=$msgErr");
}

?>