
    <!---------------------------------- Information ------------------------------------------->
<?php
    include_once('components/functions.php');
    session_start_once();
        
    $displayYourBadge = displayYourBadge($_SESSION['user_id']);
?>
    <div class="row mx-auto">
        <div class="animationSpawn col-lg-5 mb-5">

            <h2 class="titre_h2 text-center">Information</h2>

            <div class="cadre info container py-5">
                <div class="row mx-auto">
                    <div class="col-12 col-md-5"><img style="border-radius: 3%;" src="./assets/img/joker.jpg" width="250" height="300" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="col-lg-2 mt-5"> <?= $_SESSION['lastname'] ?></div>
                        <div class="col-lg-2 mt-5">  <?= $_SESSION['firstname'] ?> </div>
                        <div class="col-lg-2 mt-5"> <?= $_SESSION['email'] ?></div>
                    </div>

                </div>

            </div>
        </div>

        <!---------------------------------- Barre_vertical ------------------------------------------->

        <div class="d-none d-lg-block col-lg-2">
            <h2 class="barre_vertical text-center"></h2>
        </div>

        <!---------------------------------- Acquired badge ------------------------------------------->

        <div class="animationSpawn col-12 col-xl-5">

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
        <footer class="container text-center mt-5">
            <div class="container">
                <h1>Progression Badge</h1>

                <div class="progress mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated w-25 bg-dark" role="progressbar"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </footer>

