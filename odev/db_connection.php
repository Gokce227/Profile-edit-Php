<?php
     // MySQL bağlantısı için gerekli bilgile
     $host = '127.0.0.1'; // MySQL sunucu adı
     $username = 'root'; // MySQL kullanıcı adı
     $password = ''; // MySQL şifre
     $database = 'webproje'; // MySQL veritabanı adı

     // MySQL bağlantısını oluştur
     $conn = new mysqli($host, $username, $password, $database);

     // Bağlantı hatası kontrolü
     if ($conn->connect_error) {
     die("Bağlantı hatası: " . $conn->connect_error);
     }
