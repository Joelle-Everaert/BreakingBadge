<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Breaking Badges</title>
</head>

<body>
    
    <div class="addabadge">
        <h2 class="addbadgeh2">Add a badge </h2>

        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01" class="Titleofthelabels">Badge Name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Chose a new badge name"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom02" class="Titleofthelabels">Badge Color</label>
                    <input type="color" class="form-control" id="validationCustom02" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03" class="Titleofthelabels">Badge Shape</label>
                    <div class="w-100"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">
                            <div class="rectangle"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">
                            <div class="square"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">
                            <div class="triangle-up"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">
                            <div class="circle"></div>
                        </label>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="col-sm-6 mb-3">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="Titleofthelabels">Badge Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                      </div>
                </div>
            </div>

           
            <button class="btn btn-light" type="submit">Submit form</button>

        </form>

    </div>

<h3 class="addbadgeh3">Your new badge</h2>
</body>

</html>