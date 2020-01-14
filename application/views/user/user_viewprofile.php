<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
        <h3 class="modal-title">View Profile</h3>
         
            <div class="col-md-3"></div>
            <div class="col-md-5">
                
                <br/>
                <img src="<?= base_url() ?>/assets/images/thumb_img/<?= $accounts->Image?>" class="rounded-circle z-depth-0 center" alt="avatar image" style=" vertical-align: middle; width: 150px; height: 150px; border-radius: 50%;">
            </div>
            <div class="col-md-4"></div>

            <div class="form-group col-md-8 offset-md-2">

                <label for="uname">Email:</label>
                <input readonly type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" value="<?= $accounts->email?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group col-md-8 offset-md-2">
                <label for="pwd">Full Name:</label>
                <input readonly type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?= $accounts->full_name?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                <br/>
                <a href="<?= base_url() ?>user/index" class="btn btn-outline-success">Back</a>
            </div>

           

        </div>
    </div>
    <br />

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>