<section class="signupForm">
            <form style="margin:30px 0px 0px 30px;" method="post">

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
                    <input type="email" name="newEmail" placeholder="THIS MAIL IS ALREADY USED" class="form-control" aria-describedby="emailHelp" style="border: 2px solid red;">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="newPassword" placeholder="********" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label class="form-label">Promo</label>
                    <select name="promo" class="form-control" id="exampleInputPassword1">
                        <option value="bocuse">Bocuse</option>
                        <option value="lignac">Lignac</option>
                        <option value="ramsey">Ramsey</option>
                    </select>
                </div>

                <input type="submit" value="Sign-up" name="btnSignup" class="btn btn-dark">
            </form>
        </section>