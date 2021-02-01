<h1>Login</h1>

<form action="user" method="POST">
    @csrf
    <label>
        <input type="text" name="user" placeholder="username">
    </label> <br><br>
    <label>
        <input type="password" name="password" placeholder="password">
    </label> <br><br>
    <button type="submit">---> LOGIN <---</button>
</form>

<br><br>
