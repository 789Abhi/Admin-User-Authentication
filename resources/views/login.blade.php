<form method="POST" action="/login">
  @csrf
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
  </div>
  <div>
    <button type="submit">Login</button>
  </div>
</form>