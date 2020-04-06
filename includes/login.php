<?php
     if( isset($_POST['login'])){
         $type = $_POST['type'];

         if( $type == 'company'){
             header("location: ./company.php");
         }
         else{
             header("location: ./institute.php");
         }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="../css/button.css">
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
        <div style="height: 70vh; margin: auto" class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 p-5 person-bg ">
                    <div id="space-between" class="container">
                        <div class="row align-items-start">
                            <h2 class="heading white-text">Login<br/> & hire the best talent</h2>
                        </div>
                        <div class="row align-items-end">
                            <div class="w-100">
                                <a href="./signup-company.php">
                                    <p class="para white-text">Are you an Company? <em> Sign up here.</em>
                                    </p>
                                </a>
                            </div>
                            <a href="./signup-institute.php">
                                <p class="para white-text">Are you an Institute? <em> Sign up here.</em>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-0 grayBg">
                    <div class="container">
                        <div class=" mt-5 mb-3 mx-0">
                            <h2 style="text-align: center; margin: auto 0; width:100%" class="sub-heading">Login</h2>
                        </div>
                    </div>
                    <form style="padding: 2rem; height: 500px" name="loginForm" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                        
                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email">
                            <!-- <span class="text-danger">{{ $errors->first("email")}}</span> -->
                        </div>
                        
                        <div class="form-group ">
                            <label for="password">Set password</label>
                            <input type="password" class="form-control form-control-lg" name="password">
                            <!-- <span class="text-danger">{{ $errors->first("password")}}</span> -->
                        </div>
                        <div class="form-group">
                            <label for="type">Company/Institute</label>
                            <select name="type" class="custom-select custom-select-lg">
                                <option selected value="company">Company</option>
                                <option value="institute">Institute</option>
                            </select>
                        </div>
        
                        <div class="form-group mt-5">
                            <button name="login" type="submit" class=" w-100">Sign In</button>
                        </div>
                        
        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>