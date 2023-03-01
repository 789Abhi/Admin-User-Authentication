@extends('layouts.app')
@section('content')

<div class="container my-5" >
    <div class="row">
        <div class="col-md-4 offset-md-4">
           <div class="card form-holder">
            <div class="card-body">
                <h1>LOGIN</h1>
             @if (Session::has('error'))
             <p class="text-danger">
                {{Session::get('error')}}
             </p>
             @endif
             @if(Session::has('success'))
             <p class="text-sucess">
                {{Session::get('success')}}
             </p>
             @endif
    <form action="{{route('login')}}" method="post">
       @csrf
       @method('post')
       <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email address">
        @if($errors->has('email'))
         <p class="text-danger">
            {{$errors->first('email')}}
         </p>
        @endif
       </div>
     <div class="form-group">
     <label for="">password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password">
        @if($errors->has('password'))
         <p class="text-danger">
            {{$errors->first('password')}}
         </p>
        @endif
     </div>
     <div class="row">
        <div class="col-8 text-left">
           <a href="#" class="btn btn-link">Forgot password</a>
        </div>
        <div class="text-center">
          <input type="submit" class="btn btn-primary" value="Login"/>
        </div>
     </div>
    </form>      
            </div>
           </div>
        </div>
    </div>
</div>