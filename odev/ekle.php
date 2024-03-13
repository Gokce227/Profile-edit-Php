<?php
include 'db_connection.php';
     
     
     // INSERT sorgusu
     $ad_soyad = $_POST["name"];
     $email = $_POST["email"];
     $old_password = $_POST["old_password"];
     $sifre = $_POST["password"];
     $confirm_password = $_POST["confirm_password"];
/*
     $targetDir = "uploads/"; // Dosyanın kaydedileceği dizin
     $targetFile = $targetDir . basename($_FILES["profile_image"]["name"]);

     if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
          // Dosya başarıyla yüklendi, veritabanına ekleyebiliriz
          $profileImage = $targetFile;
     // INSERT sorgusu*/
     $sqlUser = "INSERT INTO user (ad_soyad, email) VALUES ('$ad_soyad', '$email')";
     $sqlPasswordReset = "INSERT INTO password_reset (old_password, sifre, confirm_password) VALUES ('$old_password','$sifre','$confirm_password')";
     
     // Sorguları çalıştır ve sonuçları kontrol et
     if ($conn->query($sqlUser) === TRUE && $conn->query($sqlPasswordReset) === TRUE) {
         echo "Veriler başarıyla eklendi";
     } else {
         echo "Hata: " . $sqlUser . "<br>" . $conn->error;
     }


    
     
     ?>