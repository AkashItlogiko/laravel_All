<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

<div class="row">
  <div class="col-lg-3"></div>
<div class="card col-lg-6 ml-4">

  <div class="card-body">
   <form action="{{route('store.contact')}}" method="post">
   @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

    @error('name')
    <strong
     class="text-danger">{{ $message }}</strong>
@enderror
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{old('email')}}" >

    @error('email')
      <strong
     class="text-danger">{{ $message }}</strong>
@enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{old('password')}}" >

    @error('password')
    <strong
     class="text-danger">{{ $message }}</strong>
@enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

</div>
</div>

 
     

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>