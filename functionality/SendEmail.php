<?php
//Poruka o dostupnosti automobila(da li je slobodan ili ne)

//Ako je automobil dostupan da se iznajmi posalji email u drugom slucaju nemoj da slajes email
if($result == "yes" || $insert == 'bezProvere'){ 
$to = "filip88ks@gmail.com";
$subject = "Rezervacija automobila preko Mondial rent a car";

$message = "
<html>
<head>
<title>Rezervacija automobila</title>
</head>
<body>
    <p>Rezervacija automobila za korisnika $ime</p>
    <table>
    <tr>
        <th>Mesto preuzimanja</th>
        <th>Mesto vracanja</th>
        <th>Datum preuzimanja</th>
        <th>Datum vracanja</th>
        <th>Dodatna oprema</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Automobil</th>
        <th>Komentar</th>
    </tr>
    <tr>
        <td>$mesto_preuzimanja</td>
        <td>$mesto_vracanja</td>
        <td>$datum_preuzimanja</td>
        <td>$datum_vracanja</td>
        <td>$allGear</td>
        <td>$ime</td>
        <td>$prezime</td>
        <td>$email</td>
        <td>$telefon</td>
        <td>$id_auto</td>
        <td>$komentar</td>
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