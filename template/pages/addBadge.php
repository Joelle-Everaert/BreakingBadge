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
        
        <div class="form-row">
        <div class="col-md-6 mb-3">
                <label for="validationCustom03" class="Titleofthelabels">Badge Shape</label>
                <select class="custom-select" class="shape" name="shape" id="inputGroupSelect02">
                    <option selected>Chose the shape of your badge</option>
                    <option class="circle" value="circle">Circle</option>
                    <option class="square" value="square">Square</option>
                    <option class="triangle-up" value="triangle">Triangle</option>
                    <option class="rectangle" value="rectangle">Rectangle</option>
                </select>
                <div class="invalid-feedback">
                    Please chose a shape.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02" class="color" class="Titleofthelabels">Badge Color</label>
                <input type="color" class="form-control" name="color" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>




        <button class="btn btn-light" type="submit">Submit form</button>

    </form>

</div>
