<div class="addabadge">
    <h2 class="addbadgeh2">Add a badge </h2>

    <form class="needs-validation" method="POST" action="components/addBadge_inc.php">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom01" class="Titleofthelabels">Badge Name</label>
                <input type="text" class="form-control" name="badge_name" id="validationCustom01"
                    placeholder="Chose a new badge name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-sm-6 mb-3">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="Titleofthelabels">Badge Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                        rows="4"></textarea>
                </div>
            </div>
        </div>
        <!-- DOUBLE NAME FORMULAIRE -->
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03" class="Titleofthelabels">Badge Shape</label>
                <div class="w-100"></div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shape" name="inlineRadioOptions"
                        id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">
                        <div class="rectangle"></div>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shape" name="inlineRadioOptions"
                        id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">
                        <div class="square"></div>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shape" name="inlineRadioOptions"
                        id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">
                        <div class="triangle-up"></div>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shape" name="inlineRadioOptions"
                        id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">
                        <div class="circle"></div>
                    </label>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02" class="Titleofthelabels">Badge Color</label>
                <input type="color" class="form-control" name="color" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>




        <button class="btn btn-light" type="submit">Submit form</button>

    </form>

</div>
