<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1 style="font-family: 'Nunito', sans-serif; color: darkred">Add Name</h1>
<br>
<form action="" method="POST">
    @csrf
    <label>
        <input style="font-family: 'Nunito', sans-serif;color: #a0aec0" type="text" name="name"
               placeholder="enter names">
    </label> <br><br>
    <button style="border-radius: 8px;font-family: 'Nunito', sans-serif;color: #a0aec0" type="submit">+</button>
</form>

<h3 style="font-family: 'Nunito', sans-serif; color: mediumvioletred"></h3>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Operation</th>
        <th scope="col">Operation</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <th scope="row">{{$item['name']}}</th>
            <td>
                <a href="delete/{{$item['id']}}">
                    <i class="fa fa-trash">Delete</i>
                </a>
            </td>
            <td><a style="font-family: 'Nunito', sans-serif; color: red" href="edit/{{$item['id']}}"> edit </a></td>
        </tr>
    @endforeach
</table>
<br>
<span>
    {{$items->links()}}
</span>

<style>
    .w-5 {
        display: none;
    }
</style>
