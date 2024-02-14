<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
        @if($success= Session::get('success'))
            <div class="alert alert-danger alert-dismissable fade show"role="alert">
                <strong>{{$success}}
                </strong> DetailsUpdated...!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="col-md-8 card my-5 mx-auto p-5">
        
                <form action="/signup" method="post" class="form-group" enctype="multipart/form-data">
                    <h1 class="text-center display-3 text-primary">Register Now..!</h1>
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control my-2">
                      <span class="text-danger">
                        @error("username")
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        
                        <input type="email" name="email" placeholder="email" class="form-control my-2" value="">
                        <span class="text-danger">
                        @error("email")
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                        <label for="Contact">contact</label>
                        <input type="number" name="contact" placeholder="Contact" class="form-control my-2">
                       <span class="text-danger">
                        @error("contact")
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input type="file" name="image"  class="form-control my-2">
                       <span class="text-danger">
                        @error("image")
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Register" class="form-control my-2 btn btn-dark">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>