<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/button.css">
    <title>Sign up Company</title>
</head>
<body>

    <div class="container justifyCenter">
            <div class="mt-3 mb-3 mx-auto">
             <a href="/"> <img src="/assets/images/blue-logo.png" alt="logo"/></a>
            </div>
        </div>
    </div>
    
    <div class="container">
<div class="row">
    <div class="col-sm-12 col-md-6 p-5 person-bg ">
        <div id="space-between" class="container">
            <div class="row align-items-start">
                <h2 class="heading white-text">Sign up now & <br> make campus <br> recruitment <br> smoother.</h2>
            </div>
            <div class="row align-items-end">
                <div class="w-100">
                    <a href="./signup-company.php">
                        <p class="para white-text">Are you an Company? <em> Sign up here.</em>
                        </p>
                    </a>
                </div>
                <a href="./login.php">
                    <p class="para white-text">Already a member? <em> Login here.</em>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm p-0">
        <form style="padding: 2rem" class="grayBg" action="/institute" method="post">
            <!-- @csrf -->
            <div class="form-group ">
                <label for="name">Let's start with the name of the institute</label>
                <input type="text" class="form-control" name="name"  value="" >
                <span class="text-danger">
                    <!-- {{ $errors->first("name")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="year">Affiliation Number</label>
                <input type="number" class="form-control" name="affl" value="">
            </div>
            <div class="form-group ">
                <label for="email">Email of your company</label>
                <input type="email" class="form-control" name="email" value="" >
                <span class="text-danger">
                    <!-- {{ $errors->first("email")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="year">Estb. in?</label>
                <input type="number" class="form-control" name="year" value="" required>
                <span class="text-danger">
                    <!-- {{ $errors->first("year")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="password">Secure password</label>
                <input type="password" class="form-control" name="password" required>
                <span class="text-danger">
                    <!-- {{ $errors->first("password")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="cpassword">Confirm password</label>
                <input type="password" class="form-control" name="cpassword" required>
                <span class="text-danger">
                    <!-- {{ $errors->first("cpassword")}} -->
                </span>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="w-100">Sign up</button>
            </div>
            

        </form>
    </div>
</div>

</div>
</body>
</html>