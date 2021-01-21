<?php
session_start();
include('../components/db.php');

?>



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
