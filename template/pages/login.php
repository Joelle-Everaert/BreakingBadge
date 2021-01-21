<?php
include_once('components/functions.php');

if(!empty($_POST['email'])){
    if(login($_POST['email'], $_POST['password'])){
            header("Location: ?p=dashboard");
    };
}
?>

 
    <section class="Form my-4 mx-5">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <img src="../assets/login.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-7 px-5 pt-5 mt-5">
            <h1 class="font-weight-bold py-3 pb-5">BREAKING BADGE</h1>
            <h4>Sign into your account</h4>

            <form>
              <div class="form-row">
                <div class="col-lg-7 my-2">
                  <input type="email" placeholder="johndoe@gmail.com" class="form-control my-3 p-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7 my-2">
                  <input type="password" placeholder="type your password" class="form-control my-3 p-4">
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-7 my-2">
                  <button type="button" class="btn1 my-3 mb-5">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

