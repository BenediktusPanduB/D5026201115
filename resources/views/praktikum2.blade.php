<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Validation</title>
    <style>
     body {
            background-color: #1b1b1b;
     }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    </style>

</head>

<body>

    <div class="container-lg rounded">
        <div class="form-body bg-light m-5 p-5">

            <h1 class="text-center">Form Validation</h1>



            <form name="validationForm" action="https://www.google.com/" onsubmit="return validateForm()">
                <div class=" row mt-3">
                    <div class="col-6">
                        <label for="firstname" class="form-label">First name:</label>
                    </div>
                    <div class="col-6">
                        <label for="lastname" class="form-label">Surname:</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" id="lastname" placeholder="Surname" name="lastname">
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="username" class="form-label">Username (6-8 Character):</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username"
                        minlength="6" maxlength="8">

                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="email" class="form-label">Email:</label>
                    </div>
                    <div class="col-6">
                        <label for="phonenumber" class="form-label">Phone number:</label>
                    </div>
                </div>
                <div class=" row mb-3">
                    <div class="col-6">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" id="phonenumber" placeholder="Phone number"
                            name="phonenumber" minlength="8" maxlength="13">
                    </div>
                </div>
                <div class="state">
                    <label for="state" class="form-label">State:</label>
                    <select class="form-select" id="state" name="state">
                        <option value="" readonly="true" hidden="true">Please Choose</option>
                        <option value="Amerika">Amerika Serikat</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Singapura">Singapura</option>

                    </select>

                </div>
                <div class="row mt-3">
                    <div class="col-9">
                        <label for="address" class="form-label">Address:</label>
                    </div>
                    <div class="col-3">
                        <label for="zipcode" class="form-label">Zip Code:</label>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col-9">
                        <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id="zipcode" placeholder="Zipcode" name="zipcode"
                         maxlength="6">
                    </div>
                    <small class="text-muted">*All field are required</small>
                </div>
                <!-- <div class="mb-3">
                  <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div> -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="myCheck" name="myCheck" value="check">
                    <label class="form-check-label" for="myCheck">I agree on this terms & conditions</label>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 80px;">Submit</button>
                <button type="reset" class="btn btn-danger" style="width: 80px;">Reset</button>
            </form>
            <h6 class="text-center text-muted mt-5">© Benediktus Pandu B</h6>
        </div>
    </div>

    <script>
        function validateForm() {
            if (document.forms["validationForm"]["firstname"].value == "") {
                alert("Fill your firstname");
                document.forms["validationForm"]["firstname"].focus();
                return false;
            }
            if (!/^[a-zA-Z\s]+$/g.test(document.validationForm.firstname.value)) {
                alert("Firstname must be Alphabets");
                document.validationForm.firstname.focus();
                return false;
            }
            if (document.forms["validationForm"]["lastname"].value == "") {
                alert("Fill your surname");
                document.forms["validationForm"]["lastname"].focus();
                return false;
            }
            if (!/^[a-zA-Z\s]+$/g.test(document.validationForm.lastname.value)) {
                alert("Surname must be Alphabets");
                document.validationForm.lastname.focus();
                return false;
            }
            if (document.forms["validationForm"]["username"].value == "") {
                alert("Fill your username");
                document.forms["validationForm"]["username"].focus();
                return false;
            }
            if (document.forms["validationForm"]["email"].value == "") {
                alert("Fill your email");
                document.forms["validationForm"]["email"].focus();
                return false;
            }
            if (document.forms["validationForm"]["phonenumber"].value == "") {
                alert("Fill your Phonenumber");
                document.forms["validationForm"]["phonenumber"].focus();
                return false;
            }
            if (document.forms["validationForm"]["state"].selectedIndex < 1) {
                alert("choose your state.");
                document.forms["validationForm"]["state"].focus();
                return false;
            }

            if (document.forms["validationForm"]["address"].value == "") {
                alert("Fill your address");
                document.forms["validationForm"]["address"].focus();
                return false;
            }
            if (document.forms["validationForm"]["zipcode"].value == "") {
                alert("Fill your zipcode");
                document.forms["validationForm"]["zipcode"].focus();
                return false;
            }
            if (document.getElementById('myCheck').checked) {
                return true;
            } else {
                alert("Please Check your Checkbox");
                return false;
            }

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
