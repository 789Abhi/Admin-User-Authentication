<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head> 
<body>
<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid ">
    <a class="navbar-brand fs-4 mx-4 text-info" href="#">ADMIN DASHBOARD </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/dashboard">HOME</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-warning " aria-current="page" href="#">VIEW USERS</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active text-danger" aria-current="page" href="{{url('categories')}}">VIEW USERS</a>
        </li>
      </ul>
        <a class="" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"><button class="btn btn-outline-success">{{ __('Logout') }}</button> 
        </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
    </div>
  </div>
</nav>
  <div class="card container my-4 border-dark">
  <div class="card-header">
   <h4 class="text-center">Edit/Update User</h4>
  </div>
    <div class="card-body">
  <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-md-6 mb-3">
   <label for="">Name</label>
   <input type="text" class="form-control border-info" name="name" value="{{$category->name}}" required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">Gender</label>
   <input type="text" class="form-control border-info" value="{{$category->gender}}" name="gender" required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">Email</label>
   <input type="email" class="form-control border-info" value="{{$category->email}}" name="email" required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">Phone Number</label>
   <input type="tel" name="phone_number" value="{{$category->phone_number}}"  class="form-control border-info" required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">Date of Birth</label>
   <input type="date" value="{{$category->date}}"  class="form-control border-info" name="date" required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">UserName</label>
   <input type="text" class="form-control border-info" name="UserName" value="{{$category->UserName}}"required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">Password</label>
   <input type="password" class="form-control border-info" value="{{$category->Password}}" name="Password"required>
   </div>
   <div class="col-md-6 mb-3">
   <label for="">Address </label>
   <input type="text" class="form-control border-info" value="{{$category->Address}}" name="Address"required>
   </div>
   <div class="col-md-12 mb-3 text-center">
   <label for="" class="text-center">Profile Image </label>
    <input type="file" name="image" value="{{$category->image}}" class="form-control border-info">
   </div>
   <div class="col-md-12 text-center">
   <button class="btn btn-primary " type="submit">submit</button>

   </div>
    </div>
  </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
