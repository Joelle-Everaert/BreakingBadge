<!-- <?php 
//importer fonction

$badges = getBadges();
while($badge = $badges->fetch()){
    echo '<li>'.$badge['name'] . " - [" .$badge['description']. '] <a href="?p=editBadge&id_badge=' .$badge['id_badge']. '">EDIT</a> -  <a href="?p=deleteBadge&id_badge=' .$badge['id_badge']. '">DELETE</a></li> ';
}

//boucle pour les afficher
?>  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="../assets/style.css">

    <title>Breaking Badge</title>
</head>

<body>
    <h1 class="mytitle text-center">List of all badges</h1>
    <div class="tableallbadges">
        <table class="animationSpawn table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description </th>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Leonardo Dicaprio</td>
                    <td></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i>
                </td>
                </tr>
                <tr>

                    <td>Cris Evans</td>
                    <td></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>

                <tr>

                    <td>Robin Williams</td>
                    <td></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>

                    <td>Will Smith</td>
                    <td></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>


            </tbody>
        </table>
    </div>


     
     <!-- ------------BOUTON ADD BADGE---------- -->
        <form class="form-inline mt-5 justify-content-lg-center justify-content-sm-center">
            <button type="submit" name="out" value="Deconnexion" class="btn_addUsers  btn btn-dark"><a href="
                    ?p=addBadge"> ADD NEW BADGE<i class="icon fas fa-calendar-plus"></i></a>
            </button>
        </form>
<!----------------------------------------------------------------- Modal + button ----------------------------------------------------------------------------------->
<!-- 
     <form class="form-inline mt-5 justify-content-lg-center justify-content-sm-center">
            <button type="button" name="addUser" class="btn_addUsers btn btn-dark" data-toggle="modal"
                data-target="#signupModal">All Edit

                <i class="fas fa-user-edit"></i></button>
        </form>

        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">All Edit</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php //include('./pages/addBadge.php')?>
                    </div>
                </div>
            </div>
        </div> -->

        

</body>

</html>