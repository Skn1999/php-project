<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/app.css">
    <title>Sign up Company</title>
</head>
<body>

    <div class="container justifyCenter">
            <div class="mt-3 mb-3 mx-auto">
<<<<<<< HEAD
             <a href="/"> <img src="/assets/images/blue-logo.png" alt="hired."/></a>
=======
             <a href="/tmp/index.php"> <img src="./../assets/images/blue-logo.png" alt="hired."/></a>
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
            </div>
        </div>
    </div>
    
    <div class="container">


        <!-- message section -->
        <!-- @if(count($errors) > 0) -->
            <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
            </div>
        <!-- @endif -->

        <!-- @if (session('success')) -->
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        <!-- @endif -->

        <!-- @if (session('error')) -->
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        <!-- @endif -->
        <!-- end if -->

        <div class="row mt-5">
            <div class="col-sm-12 col-md-6 p-5">
                <div id="space-between" class="container">
                    <div class="row align-items-start">
                        <h2 class="heading">Change your<br/>profile settings here.</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm p-0">
                <form style="padding: 2rem" class="grayBg" action="/company/{{ $data->company_id }}" method="POST">
                    <!-- @csrf
                    @method('PUT') -->
                    <div class="form-group ">
                        <label for="name">The name of the company</label>
                        <input type="text" class="form-control" name="name"  
                        value={{ $data->name }}
                        >
                        <span class="text-danger">
                            <!-- {{ $errors->first("name")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="year">The year you got registered</label>
                        <input type="number" class="form-control" name="year" 
                        value={{ $data->year }}
                        >
                        <span class="text-danger">
                            <!-- {{ $errors->first("year")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="domain">Domain of your company</label>
                        <input type="text" class="form-control" name="domain" 
                        value={{ $data->domain}}
                        >
                        <span class="text-danger">
                            <!-- {{ $errors->first("domain")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="email">Email of your company</label>
                        <input type="email" class="form-control" name="email" 
                        value={{ $data->email }}
                        >
                        <span class="text-danger">
                            <!-- {{ $errors->first("email")}} -->
                        </span>
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class=" w-100">Update Information</button>
                    </div>
                    
        
                </form>
            </div>
        </div>
    </div>
</body>
</html>