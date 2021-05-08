<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="Username" placeholder="Enter user id"/><br><br>
    <input type="password" name="Userpassword" placeholder="Enter user password"/><br><br>
    <button type="submit">Login</button>
</form>
