<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];
if (!empty($nama) || !empty($alamat) || !empty($nomor_telepon)) {
    //create connection
    $conn = mysqli_connect("localhost","root","","tdatabase");
    if ($conn-> connect_error) {
        die("connection failed: ". $conn-> connect_error);
    } else {
     $INSERT = "INSERT INTO form_entry (nama, alamat, nomor_telepon) VALUES(?, ?, ?)";
     //Prepare statement
     if ($stmt = $conn->prepare($INSERT)) {
      $stmt->bind_param("sss", $nama, $alamat, $nomor_telepon);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>