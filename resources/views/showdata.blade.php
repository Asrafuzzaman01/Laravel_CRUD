<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud laravel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <h2>student info</h2>

<div class="container">
    <a href="{{url('/add_data')}}" class="btn btn-info my-4">Add data</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($showdata as $key=>$data )
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->Name}}</td>
            <td>{{$data->Phone}}</td>
            <td>{{$data->Email}}</td>
            <td>
                <a href="{{url('/editedata/'. $data->id)}}" class="btn btn-success">Edite</a>
                <a href="{{url('/deletedata/'. $data->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      {{$showdata->links()}}

</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
