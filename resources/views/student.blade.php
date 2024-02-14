<!doctype html>
<html lang="en">
    <head>
        <title>Registerd student list</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <div class="container mt-5">
            @if($success= Session::get('success'))
            <div class="alert alert-danger alert-dismissable fade show"role="alert">
                <strong>{{$success}}
                </strong>Student Deleted...!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h1>Table</h1>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#s.no</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">contact</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($student as $student)
   
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$student['username']}}</td>
      <td>{{$student['email']}}</td>
      <td>{{$student['contact']}}</td>
      <td><img src="./uploads/{{$student['image']}}" width="50" alt="">
    </td>
    <td>
   <a href="/deletestudent/{{$student['id']}}" class="btn btn-danger">Delete</a>
   <a href="/editstudent/{{$student['id']}}" class="btn btn-primary">Edit</a>
   </td>
    </tr>
    @endforeach

  
  </tbody>
 
  
</table>
</div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
