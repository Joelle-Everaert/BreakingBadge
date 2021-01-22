<!-- <?php 
//importer fonction

// $badges = getBadges();
// while($badge = $badges->fetch()){
//     echo '<li>'.$badge['name'] . " - [" .$badge['description']. '] <a href="?p=editBadge&id_badge=' .$badge['id_badge']. '">EDIT</a></li> ';
// }

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
    <h1 class="mytitle">List of all badges</h1>
    <div class="tableallbadges">
        <table class="animationSpawn table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Badge</th>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>Leonardo Dicaprio</td>
                    <td><img src="https://pitshanger-ltd.co.uk/images/colours/517-TL_Yellow%201.jpg" width="50"
                            height="50" alt=""></td>
                    <td>
                        <!-- <form><button type="button" name="editBadge" class="btn_editBadge btn" data-toggle="modal"
                            data-target="#signupModal"> -->
                            <i class="fa fa-edit"></i>
                        <!-- </button></form> -->
                            
                        </td>


                    <td><i class="fa fa-trash"></i>
                </td>
                </tr>
                <tr>

                    <td>Cris Evans</td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Green_rectangle.svg/1024px-Green_rectangle.svg.png"
                            width="50 " height="50" alt=""></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>

                <tr>

                    <td>Robin Williams</td>
                    <td><img src="http://www.clker.com/cliparts/d/e/d/2/13140637481464283876orange%20triangle-hi.png"
                            width="50 " height="50" alt=""></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>

                    <td>Will Smith</td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Light_Blue_Circle.svg/1200px-Light_Blue_Circle.svg.png"
                            width="50 " height="50" alt=""></td>
                    <td><i class="fa fa-edit"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>


            </tbody>
        </table>
    </div>


    <!-- <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign-up</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php //include('./components/addUser_inc.php')?>
                </div>
            </div>
        </div>
    </div> -->

</body>

</html>