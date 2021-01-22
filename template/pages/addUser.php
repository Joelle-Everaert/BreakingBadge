<section class="signupForm">
            <form style="margin:30px 0px 0px 30px;" method="POST" action="components/addUser_inc.php">

            <div class="mb-3">
                <label  class="form-label">Firstname</label>
                <input type="text" name="firstname" placeholder="Paul" class="form-control">
            </div>
            
            <div class="mb-3">
                <label  class="form-label">Lastname</label>
                <input type="text" name="lastname" placeholder="Sernine" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" placeholder="Please enter an email address" id="email" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="********" class="form-control" id="password" id="exampleInputPassword1">
            </div>


                <input type="submit" value="Register" name="btnSignup" id="button" class="btn btn-dark">
            </form>
        </section>