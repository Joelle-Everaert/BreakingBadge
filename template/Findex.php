<?php
  session_start();
  include_once('./components/functions.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <title>Breaking Badge</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9be8d195b1.js" crossorigin="anonymous"></script>
</head>

<body>

<!---------------------------------- Navigation ------------------------------------------->

    <nav class="navbar navbar-light mb-5 p-lg-3">
        <a class="d-flex navbar-brand" href="#">
            <img id="img_profile" src="assets/img/clipart.png" width="100" height="100"
                class="mb-4 d-inline-block align-top" alt="img" loading="lazy">
            <h1 class="jello-horizontal titre_h1 ml-4">Breaking Badge</h1>
        </a>
    </nav>
<!---------------------------------- Formulaire ------------------------------------------->
    <?php include_once('components/router.php'); ?>

    
</body>

</html>