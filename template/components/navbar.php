
 <?php
    foreach($routes as $key=>$value){
    ?>
      <li><a href="?p=<?php echo $key; ?>"><?php echo $value; ?></a></li>
    <?php
    }
  ?> 


   <!---------------------------------- Navigation ------------------------------------------->



   <nav class="navbar navbar-light mb-5 p-lg-3">
        <a class="d-flex navbar-brand" href="?p=dashboard">
            <img id="img_profile" src="./assets/img/clipart.png" width="100" height="100"
                class="mb-4 d-inline-block align-top" alt="img" loading="lazy">
            <h1 class="jello-horizontal titre_h1 ml-4">Breaking Badge</h1>
        </a>
        <?php 
        if($_SESSION['account_type'] == "ADMIN"){
        ?>
        <button type="submit" name="out" value="Deconnexion" class="btn_addUsers  btn  btn-dark"><a href="
                    ?p=badges"> All badges</a>
        <!-- <a class="d-flex navbar-brand" href="?p=badges"> ALL BADGES</a> -->
        <?php
        }
        ?>
        <form class="form-inline">
            <button type="submit" class="btn_logout btn btn-dark"><a
                    href="?p=logout">Logout
                <i class="fas fa-sign-out-alt"></i></a> </button>
        </form>
    </nav>