<?php

$nama  = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pesan = $_POST['pesan'];

mail(
    "mfikram990@gmail.com",
    "U got an email",
    "Nama: $nama\nEmail: $email\nPhone: $phone\nPesan: $pesan"
);

echo "Message sent";

?>