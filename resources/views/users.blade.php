<h1>Login for Users</h1>

<form action="users" method="POST">
    @csrf
    <label>
        <input type="text" value="{{old('username')}}" name="username" placeholder="enter user id">
    </label>
    <br>
    <span style="color: darkred">
        @error('username') {{$message}} @enderror
    </span>

    <br><br>
    <label>
        <input type="password" value="{{old('userPassword')}}" name="userPassword" placeholder="enter password">
    </label>

    <br>
    <span style="color: darkred">
        @error('userPassword') {{$message}} @enderror
    </span>

    <br><br>
    <button type="submit">Login</button>
</form>
<br><br>

