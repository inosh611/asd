<h1>Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" placeholder="Password"><br><br>
    <button  type="submit">Login</button>


</form>