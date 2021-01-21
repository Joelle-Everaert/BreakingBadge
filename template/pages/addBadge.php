
<div class="addabadge">
    <h2 class="addbadgeh2">Add a badge </h2>
<!-- METHODE POST !! -->
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
            <div class="col-md-6 mb-3">
                <label for="validationCustom01" class="Titleofthelabels">Description</label>
                <textarea class="form-control" name="description" id="validationCustom04"
                    placeholder="enter a description"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03" class="Titleofthelabels">Badge Shape</label>
                <select class="custom-select" name="shape" id="inputGroupSelect02">
                    <option selected>Chose the shape of your badge</option>
                    <option value="circle">Circle</option>
                    <option value="square">Square</option>
                    <option value="triangle">Triangle</option>
                    <option value="rectangle">Rectangle</option>
                </select>
                <div class="invalid-feedback">
                    Please chose a shape.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02" class="Titleofthelabels">Badge Color</label>
                <input type="color" class="form-control" name="color" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
