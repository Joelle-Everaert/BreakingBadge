<!---------------------------------- Navigation ------------------------------------------->

<?php
include_once('components/functions.php');
session_start_once();

$displayUsers = getUserNormie();
$displayBadges = displayUserBadge();
?>

<!---------------------------------- All user ------------------------------------------->

<div class="row mx-auto">
    <div class="animationSpawn col-lg-5 mb-5">

        <h2 class="titre_h2 text-center">All users </h2>

        <div class='info tableBadge' style="overflow-y:auto; max-height: 42vh;">
            <table class=" table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                foreach($displayUsers as $user){
                    echo '<tr> <td>'.$user['firstname'] . "</td><td>" .$user['lastname'] . "</td><td>" . $user['email'] . '</td></tr>';
                }
                ?>

                </tbody>
            </table>

        </div>
        <!-- ------------------- bouton addUser + Modal ------------------- -->
        <form class="form-inline mt-5 justify-content-lg-center justify-content-sm-center">
            <button type="button" name="addUser" class="btn_addUsers btn btn-dark" data-toggle="modal"
                data-target="#signupModal">Add users

                <i class="fas fa-user-plus"></i></button>
        </form>
    </div>

    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign-up</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include('./pages/addUser.php')?>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------- Barre_vertical ------------------------------------------->

    <div class="d-none d-lg-block col-lg-2">
        <h2 class="barre_vertical text-center"></h2>
    </div>

    <!---------------------------------- Liste badge ------------------------------------------->

    <div class="animationSpawn col-12 col-xl-5">

        <h2 class="titre_h2 text-center">User's badges</h2>


        <div class='info tableBadge' style="overflow-y:auto; max-height: 42vh;">
            <table class=" table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Badges</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($displayBadges as $value){
                        echo '<tr><td>'.$value['firstname'] . ' </td><td>' . $value['name'] . '</td></tr>';
                    }
                    ?>

                </tbody>
            </table>

        </div>
        
        <!---------------------------------------BOUTON ADD BADGE---------------------------------------------->
        <form class="form-inline mt-5 justify-content-lg-center justify-content-sm-center">
            <button type="submit" name="out" value="Deconnexion" class="btn_addUsers  btn btn-dark"><a href="
                    ?p=addBadge"> ADD NEW BADGE<i class="icon fas fa-calendar-plus"></i></a>
            </button>
        </form>
    </div>