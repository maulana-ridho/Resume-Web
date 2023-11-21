<?php
require 'koneksi.php';

if(isset($_POST['submit'])) {
    $id_form = $_POST['id_form'];
    $name_form = $_POST['name_form'];
    $email_form = $_POST['email_form'];
    $subjet_form = $_POST['subject_form'];
    $text_form = $_POST['text_form'];

    $query = mysqli_query($koneksi "INSERT INTO contact_form VALUES(null,'$name_form','$email_form','$subjet_form','$text_form')");
    if($query, $koneksi) {
        echo "<script>Alert! ('Pesan telah terkirim!')</script>";
    } else {
        echo "<script>Alert! ('Pesan gagal terkirim!')</script>";
    }
}


?>