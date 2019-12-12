<?php
include "../entities/promo.php";
include "../core/promocore.php";

if (isset($_POST["submit"])) {
    $promo = new promo($_POST["dishname"], $_POST["price"], $_POST["date"]);
    $promocore = new promocore();
    $promocore->addpromo($promo);
    echo "<script>window.open('viewpromo.php?id=deletedSucceed','_self')</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/slider.css">

    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-primary" href="http://localhost/webb5/backoffice/view/index.php">Le surfin</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="http://localhost/webb5/backoffice/view/viewpromo.php">view promos <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <div class="container ">
        <h1 class="text-center">add promo</h1>
        <form action="addpromo.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">dish name</label>
                <select class="form-control" id="exampleFormControlSelect1" name="dishname">
                    <option>soupe poisson</option>
                    <option>brick au fruit de mer</option>
                    <option>mazza le surfin</option>
                    <option>complet de poisson</option>
                    <option>sorbet de citron</option>
                    <option>fruit de saison</option>


                </select>
            </div>
            <div class="form-group">
                <label for="formControlRange">price</label>
                <div class="slidecontainer">
                    <input type="range" min="1" max="60" value="20" class="slider" id="myRange" name="price">
                    <p id="demo"></p>

                </div>
            </div>
            <div class="form-group">

                <input type="date" placeholder="date" name="date">
            </div>
            <button class="btn btn-primary" name="submit">submit</button>

    </div>



    </form>


    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function() {
            output.innerHTML = this.value + " DT";
        }
    </script>
</body>

</html>