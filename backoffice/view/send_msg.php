<?php
 include_once 'C:\wamp64\www\webb5\frontoffice\core\init.php';
 include 'C:\wamp64\www\webb5\backoffice\entities\reclamation.php';
 include 'C:\wamp64\www\webb5\backoffice\core\reclamationC.php';

 if(isset($_POST['send']))
 {  
    $mail = $_POST['mail'];
    $msg = $_POST['msg'];
    $date = date('y-m-d h:i:s');

   $sql_insert = mysqli_query($con,"INSERT INTO notification(mail, message, cr_date) VALUES ('$mail','$msg','$date')");
   if($sql_insert)
   {
     echo "<script>alert('message send successfully');</script>";
   }
   else
   {
     echo mysqli_query($con);
     exit;
   }
 }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK10YPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f7d584ac98.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="C:\wamp64\www\webb5\frontoffice\views\css\own_styles.css">
    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container" id="center">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                <form method="post">
                    <div class="form-group">
                        <?php
                        
                        ?>
                        <label for="exampleInputEmail1">User mail</label>
                        <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                         <label for="exampleFormControlTextarea1">Enter message</label>
                        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" name="send" class="btn btn-primary">Submit</button>
                </form>
                 
                </div>
                <div class="col-sm-4"></div>
            
            </div>
        
        
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>