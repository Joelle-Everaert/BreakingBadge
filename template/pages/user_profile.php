
    <!---------------------------------- Information ------------------------------------------->
<?php
    include_once('components/functions.php');
    session_start_once();
        
    $displayYourBadge = displayYourBadge($_SESSION['user_id']);
?>
    <div class="row mx-auto d-flex justify-content-between">
        <div class="animationSpawn col-lg-5 mb-5">

            <h2 class="titre_h2 text-center">Information</h2>

            <div class="cadre info container py-5">
                <div class="row mx-auto d-flex">
                    <div class="col-12 col-md-5"><img style="border-radius: 3%;" src="./assets/img/joker.jpg" width="200" height="250" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="col-lg-2"> <h3>Name:</h3>  <p class="p_profile"><?= $_SESSION['lastname'] ?></p> </div>
                        <div class="col-lg-2 mt-5"> <h3>Surname:</h3> <p  class="p_profile"><?= $_SESSION['firstname'] ?></p>  </div>
                        <div class="col-lg-2 mt-5"> <h3>Email:</h3> <p  class="p_profile"><?= $_SESSION['email'] ?></p> </div>
                    </div>

                </div>

            </div>
        </div>


        <!---------------------------------- Acquired badge ------------------------------------------->

        <div class="animationSpawn col-lg-5 mb-5">

            <h2 class="titre_h2 text-center">Acquired badge</h2>


            <div class='info tableBadge' style="overflow-y:auto; max-height: 42vh;">
                <table class=" table table-dark table-striped">
                    <thead>
                        <tr>
                            
                            <th scope="col">Badge's name</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($displayYourBadge as $value){
                            echo '<tr> <td>'.$value['name'] . '</td><td>' .$value['description']. '</td></tr>';
                        }
                        ?>
            

                    </tbody>
                </table>

            </div>
        </div>

        <!-- d-none d-lg-block  -->
        <footer class="container text-center mt-1">
            <div class="container">
                <h1>Progression Badge</h1>

                <div class="progress mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated  bg-dark" style="width:<?php echo "70"; ?>%"></div>      
                </div>
            </div>
        </footer>

