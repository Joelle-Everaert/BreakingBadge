

<!DOCTYPE html>
<html lang="en">


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
            <?php 
//importer fonction

$badges = getBadges();
while($badge = $badges->fetch()){
    echo '<tr><td>'.$badge['name'] . "</td><td> " .$badge['description']. '</td><td><a href="?p=editBadge&id_badge=' .$badge['id_badge']. '"><i class="fa fa-edit"></a></td><td>  <a href="?p=deleteBadge&id_badge=' .$badge['id_badge']. '"><i class="fa fa-trash"></a></td></tr>';
}

//boucle pour les afficher
?> 
            </tbody>
        </table>
    </div>


     
     <!-- ------------BOUTON ADD BADGE---------- -->
        <form class="form-inline mt-5 justify-content-lg-center justify-content-sm-center">
            <button type="submit" name="out" value="Deconnexion" class="btn_addUsers  btn btn-dark"><a href="
                    ?p=addBadge"> ADD NEW BADGE<i class="icon fas fa-calendar-plus"></i></a>
            </button>
        </form>


