<?php
include "../entities/promo.php";
include "../core/promocore.php";

$id = $_GET["id"];
if (isset($_POST["submit"])) {
    $promo = new promo($_POST["dishname"], $_POST["price"], $_POST["date"]);
    $promocore = new promocore();

    $promocore->updatepromo($promo, $id);
    echo "<script>window.open('viewpromo.php','_self')</script>";
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
    <?php


    include_once "../core/promocore.php";

    $id = $_GET["id"];

    $promocore = new promocore();
    $list = $promocore->viewpromofromid($id);
    foreach ($list as $row)

        ?> <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-primary" href="http://localhost/webb5/backoffice/view/index.php">Le surfin</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="http://localhost/webb5/backoffice/view/viewpromo.php">view promos <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>


    <div class="container text-center">
        <h1>update promo</h1>
        <form action="updatepromo.php?id=<?php echo $row['id']; ?>" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">dish name</label>
                <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row["dishname"] ?>" name="dishname">
                    <option>couscous</option>
                    <option>pizza marmiton</option>
                    <option>escalope gruille</option>
                    <option>cordon bleu</option>
                    <option>plateau fruit de mar</option>
                    <option>spaghetti fruit de mer</option>
                    <option>grillade mixte</option>

                </select>
            </div>
            <div class="form-group">
                <label for="formControlRange">price</label>
                <div class="slidecontainer">
                    <input type="range" min="1" max="60" value="<?php echo $row["price"] ?>" class="slider" id="myRange" name="price">
                    <p id="demo"></p>

                </div>
            </div>
            <div class="form-group">

                <input type="date" value="<?php echo $row['date'] ?>" name="date">
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