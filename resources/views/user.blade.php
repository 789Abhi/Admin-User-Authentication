<h1>USER LOGIN PAGE</h1>
<!-- @if($errors->any())
 @foreach($errors->all() as $err)
  <li>{{ $err}}</li>
 @endforeach
@endif -->
<form action="user" method="POST">
    @csrf
    <label for="">Enter username</label>
<input type="text" name="username" id=""><br>
  <span style="color:red">@error('username'){{$message}} @enderror</span>
<br>
<label for="">Enter Password</label>
<input type="password" name="password" id=""><br>
<span style="color:red">@error('password'){{$message}}@enderror</span>
<br>
<button  type="submit">LOGIN</button>
</form>