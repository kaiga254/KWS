<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Register With Us || KWSF</title>
    <style>
    #loading-img {
        display: none;
    }

    .response_msg {
        margin-top: 10px;
        font-size: 13px;
        background: #E5D669;
        color: #ffffff;
        width: 250px;
        padding: 3px;
        display: none;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form name="contact-form" action="" method="post" id="contact-form">
                    <h2>Parent Detail</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Name">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="module">Module</label>
                        <textarea name="module" class="form-control" rows="3" cols="28" rows="5"
                            placeholder="module"></textarea>
                    </div>
                    <h2>Child Details</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Name">First Name</label>
                            <input type="text" class="form-control" name="child_first_name" placeholder="First Name"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Name">Last Name</label>
                            <input type="text" class="form-control" name="child_last_name" placeholder="Last Name"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="number" class="form-control" name="child_age" placeholder="Age" required>
                    </div>
                    <label for="gender">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="child_gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="child_gender" id="inlineRadio2"
                            value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="child_gender" id="inlineRadio3"
                            value="Other">
                        <label class="form-check-label" for="inlineRadio3">Other</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit"
                        id="submit_form">Submit</button>
                    <button type="reset" class="btn btn-secondary" name="reset" value="reset"
                        id="reset_form">Reset</button>
                    <img src="img/91.gif" id="loading-img" width="50px">
                </form>
                <div class="response_msg"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#contact-form").on("submit", function(e) {
            e.preventDefault();
            if ($("#contact-form [name='first_name']").val() === '') {
                $("#contact-form [name='last_name']").css("border", "1px solid red");
            } else if ($("#contact-form [name='email']").val() === '') {
                $("#contact-form [name='email']").css("border", "1px solid red");
            } else {
                $("#loading-img").css("display", "block");
                var sendData = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "get_response.php",
                    data: sendData,
                    success: function(data) {
                        $("#loading-img").css("display", "none");
                        $(".response_msg").text(data);
                        $(".response_msg").slideDown().fadeOut(3000);
                        $("#contact-form").find(
                            "input[type=text], input[type=email], textarea").val("");
                    }
                });
            }
        });
        $("#contact-form input").blur(function() {
            var checkValue = $(this).val();
            if (checkValue != '') {
                $(this).css("border", "1px solid #eeeeee");
            }
        });
    });
    </script>
</body>

</html>