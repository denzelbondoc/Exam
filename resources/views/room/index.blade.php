<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room</title>
  </head>
  <body>
    <h1 class="text-center">Rooms</h1>
    <br>
    <table class="table table-striped mb-0">
    <thead style="background-color: #EADDCA;">
    <tr>
      <th scope="col">RoomID</th>
      <th scope="col">Description</th>
      <th scope="col">Capacity</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>

    </tr>

    <tbody>
    @foreach ($rooms as $room)
    
    <tr>
        <td>
        {{$room->id}}
        </td>
        <td>
        {{$room->description}}
        </td>
        <td>
        {{$room->capacity}}
        </td>
        <td>
        {{$room->dateFrom}}
        </td>
        <td>
        {{$room->dateTo}}
        </td>
    </tr>
    @endforeach
    </tbody>
  </thead>
    </table>
  </body>
</html>