<!-- <?php
session_start();
include('includes/connexion.php');

?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>




    <!-- Image and text -->
    <nav class="navbar navbar-light mb-5 p-lg-3">
        <a class="d-flex navbar-brand" href="#">
            <img id="img_profile" src="../assets/img/clipart.png" width="100" height="100"
                class="mb-4 d-inline-block align-top" alt="img" loading="lazy">
           <h1 class="jello-horizontal titre_h1 ml-4">User profile</h1> 
        </a>
        <form class="form-inline">
            <button type="submit" name="out" value="Deconnexion" class="btn  btn-dark"><a href="./logOut.php">Logout
                </a> <i class="fas fa-sign-out-alt"></i></button>
        </form>
    </nav>



    <div class="row mx-auto">
        <div class="animationSpawn col-lg-5 mb-5">

            <h2 class="titre_h2 text-center">Information</h2>

            <div class="cadre info container py-5">
                <div class="row mx-auto">
                    <div class="col-12 col-md-5"><img src="../assets/img/joker.jpg" width="250" height="300" alt=""></div>
                    <div class="col-12 col-md-4">
                        <div class="col-lg-2 mt-5"> Name: ????????????????????????????</div>
                        <div class="col-lg-2 mt-5"> FirstName: ???????????????????????????? </div>
                        <div class="col-lg-2 mt-5"> Email: ????????????????????????????</div>
                    </div>



                </div>

            </div>
        </div>


        <div class="d-none d-lg-block col-lg-2">
            <h2 class="barre_vertical text-center"></h2>
        </div>


        <div class="animationSpawn col-12 col-xl-5">

            <h2 class="titre_h2 text-center">Acquired badge</h2>

            <div>
                <table class="table table-dark table-striped">
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
                    </tbody>
                  </table>
            </div>
        </div>


        <footer class="animationSpawn footer text-center fixed-bottom">
            <p class="footer_p">Statistique</p>
        </footer>







        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
</body>

</html>