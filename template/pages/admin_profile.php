<?php
session_start();
include('../components/db.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9be8d195b1.js" crossorigin="anonymous"></script>
</head>

<body>


    <!---------------------------------- Navigation ------------------------------------------->

    <?php include('../components/navbar.php');?>

    <!---------------------------------- All user ------------------------------------------->

    <div class="row mx-auto">
        <div class="animationSpawn col-lg-5 mb-5">

            <h2 class="titre_h2 text-center">All users </h2>

            <div class='info tableBadge' style="overflow-y:auto; max-height: 42vh;">
                <table class=" table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <form class="form-inline mt-5 justify-content-lg-center justify-content-sm-center">
                <button type="submit" name="out" value="Deconnexion" class="btn_addUsers  btn  btn-dark"><a href="./logOut.php">Add
                        users
                    <i class="fas fa-user-plus"></i></a> </button>
            </form>
        </div>

        <!---------------------------------- Barre_vertical ------------------------------------------->

        <div class="d-none d-lg-block col-lg-2">
            <h2 class="barre_vertical text-center"></h2>
        </div>

        <!---------------------------------- Liste badge ------------------------------------------->

        <div class="animationSpawn col-12 col-xl-5">

            <h2 class="titre_h2 text-center">Liste badge</h2>


            <div class='info tableBadge' style="overflow-y:auto; max-height: 42vh;">
                <table class=" table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>

                    </tbody>
                </table>

            </div>

        </div>

        <footer class="animationSpawn fixed-bottom text-center">
            <div class="container">


                <!--<h1>Progression Badge</h1>
            
             <div class="progress mb-5">
                <div class="progress-bar progress-bar-striped progress-bar-animated w-25 bg-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div> -->
            </div>
        </footer>







        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
</body>

</html>