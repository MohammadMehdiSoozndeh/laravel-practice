<h1>Users list in api</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    @foreach($users as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src={{$item['avatar']}}></td>
        </tr>
    @endforeach
</table>

<br><br>

