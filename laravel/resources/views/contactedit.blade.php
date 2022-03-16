<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Edit Contact</title>
</head>
<body>
    

<div class="container">
<div class="jumbotron">

<h2>Edit Contact</h2>
    <form action="/update/{{$contact[0]->id}}" method="post">
        <!-----for security-------->
        {{ csrf_field() }}

        <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" name="firstName" id="fname" value="{{ $contact[0]->firstName }}" placeholder="Enter First Name">
        </div>
        <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" name="lastName" id="lname" value="{{ $contact[0]->lastName}}" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" id="mail" value="{{ $contact[0]->email }}" placeholder="Enter Email">
        </div>
        <div class="form-group">
              <label>Age</label>
              <input type="text" class="form-control" name="age" id="old" value="{{ $contact[0]->age }}" placeholder="Enter Age">
        </div>
        <div class="form-group">
              <label>Salary</label>
              <input type="text" class="form-control" name="salary" id="income" value="{{ $contact[0]->salary }}" placeholder="Enter Salary">
        </div>
        <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="address" id="city" value="{{ $contact[0]->address}}"  placeholder="Enter Address">
        </div>

        <button type="submit" name="submit" class="btn btn-primary" style="width:15%;">Update Data</button>
    </form>
</div>
</div>
</body>
</html>