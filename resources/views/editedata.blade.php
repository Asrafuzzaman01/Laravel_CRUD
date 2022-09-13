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
    <a href="{{url('/')}}" class="btn btn-info my-4">Show data</a>

    @if (Session::has('msg'))

    <p>{{Session::get('msg')}}</p>
    @endif



    <form action="{{url('/storeData')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>

            <input type="text" class="form-control" name="name" value="{{$editedata->Name}}" placeholder="enter your name">
                @error('name')
                 <span class="text-danger">{{ $message }}</span>
                 @enderror
        </div>
         <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone"value="{{$editedata->Phone}}" placeholder="enter your Phone number">
                  @error('phone')
                 <span class="text-danger">{{ $message }}</span>
                   @enderror
        </div>
         <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$editedata->Email}}" placeholder="enter your Email">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
        </div>

            <input type="submit" class="btn btn-primary my-4" value="Update">




    </form>



</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
