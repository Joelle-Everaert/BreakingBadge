
    <!---------------------------------- Information ------------------------------------------->

    <div class="row mx-auto">
        <div class="animationSpawn col-lg-5 mb-5">

            <h2 class="titre_h2 text-center">Information</h2>

            <div class="cadre info container py-5">
                <div class="row mx-auto">
                    <div class="col-12 col-md-5"><img style="border-radius: 3%;" src="./assets/img/joker.jpg" width="250" height="300" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="col-lg-2"> <h2>Lastname:</h2>  <?= $_SESSION['lastname'] ?></div>
                        <div class="col-lg-2 mt-5"> <h2>Firstname:</h2>  <?= $_SESSION['firstname'] ?> </div>
                        <div class="col-lg-2 mt-5"> <h2>Email:</h2>  <?= $_SESSION['email'] ?></div>
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

        <!-- d-none d-lg-block  -->
        <footer class="container text-center mt-1">
            <div class="container">
                <h1>Progression Badge</h1>

                <div class="progress mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated  bg-dark" style="width:<?php echo "70"; ?>%"></div>      
                </div>
            </div>
        </footer>

