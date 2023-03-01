<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
  </head>
  <body>
    <h1 class="text-center">Users</h1>
    <br>
    <table class="table table-striped mb-0">
    <thead style="background-color: #EADDCA;">
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    

    </tr>

    <tbody>
    @foreach ($users as $user)
    
    <tr>
        <td>
        {{$user->name}}
        </td>
        <td>
        {{$user->email}}
        </td>
    
    </tr>
    @endforeach
    </tbody>
  </thead>
    </table>
  </body>
</html>