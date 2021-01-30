<h1>Login for Users</h1>

<form action="users" method="POST">
    @csrf
    <label>
        <input type="text" name="username" placeholder="enter user id">
    </label> <br><br>
    <label>
        <input type="password" name="userPassword" placeholder="enter password">
    </label> <br><br>
    <button type="submit">Login</button>
</form>
