<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../view/css/bootstrap.min.css" rel="stylesheet" />


    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-primary" href="http://localhost/webb5/backoffice/view/index.php">Le surfin</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="http://localhost/webb5/backoffice/view/addpromo.php">addpromo<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>

    <div class="container mt-2">

        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">id</th>
                    <th scope="col">dishname</th>
                    <th scope="col">price</th>
                    <th scope="col">date</th>



                    <th scope="col">/</th>
                </tr>
            </thead>
            <?php

            include "../entities/promo.php";



            include "../core/promocore.php";

            $promo = new promocore();
            $list = $promo->viewpromo();
            foreach ($list as $row) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["dishname"]; ?></td>
                    <td><?php echo $row["price"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>


                    <td> <a class=" btn btn-primary m-1" href="http://localhost/webb5/backoffice/view/updatepromo.php?id=<?php echo $row["id"]; ?>">update</a>
                        <a class="btn btn-danger m-1" href="http://localhost/webb5/backoffice/view/deletepromo.php?id=<?php echo $row["id"]; ?>">delete</a>
                    </td>



                </tr>
            <?php }
            ?>
        </table>




    </div>
</body>

</html>