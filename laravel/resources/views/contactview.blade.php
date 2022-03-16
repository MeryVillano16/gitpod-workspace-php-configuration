<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>
    
    <div class"container">
        <div class="jumbotron">

        <!---to display message-->
        @if(\Session::has('success'))
        <div>
            <h4>{{ \Session::get('success') }}</h4>
        </div>
        <hr>
        @endif

            <h1>Contacts</h1>
            <hr>
                <div class="line" style="text-align:right;">
                    <a href="/contactadd" class="btn btn-primary">Add Contact</a>
                </div><br>

                <form>
                 <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Contact ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                        <tbody>
                    </thead>
                            @foreach($contact as $row)
                            <tr style="background:white;">
                            <td>{{$row->id}}</td>
                            <td>{{$row->firstName}}</td>
                            <td>{{$row->lastName}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->age}}</td>
                            <td>{{$row->salary}}</td>
                            <td>{{$row->address}}</td>
                            <td>
                                <a href="click_edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                               <a href="/click_delete/{{$row->id}}" class="btn btn-danger"> Delete</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                 </table>
                </form>
        </div>
    </div>

</body>
</html>