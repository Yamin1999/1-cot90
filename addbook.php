<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="text-center">
  <?php
   include "header.html";
   ?>
  <div class="text-center">
   <div class="login-page">
           <div class="form">

            <form class="form-signin" action="addbookDB.php" method="POST">
               <img class="mb-4" src="l.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Add Book</h1>
                <br>


            <input type="text" class="form-control" placeholder="Book No"  name="Book_no" required/>


            <input type="text" class="form-control" placeholder="Book Name"  name="Book_name" required/>



        <input type="text" class="form-control" placeholder="Author"  name="Author"required/>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>


           </form>

   </div>
   </div>
 </div>
 <?php
include "footer.php";
  ?>

  </body>
</html>
