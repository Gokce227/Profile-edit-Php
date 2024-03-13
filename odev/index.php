<?php 
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<style>
     .btn-success:hover {
          color: #fff;
          background-color: blue;
          border-color: blue;
     }
</style>

</head>
<body>
     <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="col-12">
               <div class="card">
               <div class="card-header">
               <h6 class="card-title mb-0">HESAP AYARLARIM</h6>
               </div>
               <div class="card-body">


                    <b-tabs nav-class="nav-border-top nav-border-top-primary mb-3" content-class="text-muted">
                         <b-tab title="Hesabım">

                         <div class="text-center">
                              <div class="card mb-4 mb-xs-0">
                                   <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-4" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" style="max-width: 150px; max-height: 150px;">
                                        <!-- Profile picture help block-->
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-->
                                        <input type="file" id="customFile" name="fileToUpload" hidden="">
                                        <label class="btn btn-success btn-block" for="customFile">Resmi Seç</label>
                                        <button type="submit" class="btn btn-success" name="submit">Resmi Güncelle</button>
                                   </div>
                              </div>
                              <div class="mt-3">
                                   <h5> <i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                                   <p class="text-muted">Web Developer</p>
                              </div>

                         </div>
                         <h3 class="mt-4">Hesap Bilgilerim</h3>
                         <hr>

                         <div class="row mb-4">
                         <label for="name" class="col-sm-3 col-form-label">Ad ve Soyadınız</label>
                         <div class="col-sm-8">
                              <input type="text" name="name"  class="form-control"  >
                             
                         </div>
                         </div>
                         <div class="row mb-4">
                         <label for="email" class="col-sm-3 col-form-label">Email Adersiniz</label>
                         <div class="col-sm-8">
                              <input  type="text" name="email" class="form-control"  >
                              
                         </div>
                         </div>
                         <button type="submit" class="btn btn-success">Bilgilerimi Güncelle</button>


                         <h3  class="mt-4">Hesap Güvenliği</h3>
                         <hr>
                         <div class="row mb-4">
                         <label for="old_password" class="col-sm-3 col-form-label">Old Password</label>
                         <div class="col-sm-8">
                              <input type="password" name="old_password" class="form-control" >
                              
                         </div>
                         </div>
                         <div class="row mb-4">
                         <label for="password" class="col-sm-3 col-form-label">Password</label>
                         <div class="col-sm-8">
                              <input  type="password" name="password" class="form-control" >
                              
                         </div>
                         </div>
                         <div class="row mb-4">
                         <label for="confirm_password" class="col-sm-3 col-form-label">Re Password</label>
                         <div class="col-sm-8">
                              <input  type="password" name="confirm_password" class="form-control">
                              
                         </div>
                         </div>

                         <button type="submit"  class="btn btn-success">Şifremi Güncelle</button>


                         
                    </b-tabs>


               </div>
               </div>
          </div>
          </div>
     </form>



</body>
</html>