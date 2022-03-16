<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Add Contact</title>
</head>

<body>

@if(\Session::has('success'))
    <div class="alert">
            <h4>{{ \Session::get('success') }}</h4>
    </div>
@endif

<form action="/add_data" method="POST">
    <!-----for security-------->
    {{ csrf_field() }}
    <div class="container">
        <div class="jumbotron" style="margin-top: 5%;">
            <h1>Insert Contact</h1>
            <hr>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="Enter Age">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" placeholder="Enter Salary">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address">
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="Save/Insert Data">
        
        <a href="/contactview" class="btn btn-primary">Backss to Contact</a>
        </div>   
   </div>
</form>

</body>
</html>