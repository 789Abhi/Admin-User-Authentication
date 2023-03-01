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
        <li class="nav-item">
          <a class="nav-link active text-danger" aria-current="page" href="{{url('Add-category')}}">ADD USERS</a>
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
  <div class="card  border-primary  my-4">
    <div class="card-header">
      <h4 class="text-center">USER PAGE</h4>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Username</th>
            <th>Password</th>
            <th>Address</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($category as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone_number}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->UserName}}</td>
            <td>{{$item->Password}}</td>
            <td>{{$item->Address}}</td>
            <td>{{$item->image}}</td>
            <td>
            <img style="width:120px; height:100px" src="{{asset('assests/uploads/category/'.$item->image)}}" alt="">
            </td>
            <td>
           <a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a>
           <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>

            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
