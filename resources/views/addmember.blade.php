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
<table border="1">
    <tr>
        <td style="font-family: 'Nunito', sans-serif; color: #718096">
            Name
        </td>
        <td style="font-family: 'Nunito', sans-serif; color: #718096">
            Operation
        </td>
    </tr>
    @foreach($items as $item)
        <tr>
            <td style="font-family: 'Nunito', sans-serif">
                {{$item['name']}}
            </td>
            <td>
                <a style="font-family: 'Nunito', sans-serif; color: red" href="delete/{{$item['id']}}"> - </a>
            </td>
        <tr>
    @endforeach
</table>

<span>
    {{$items->links()}}
</span>

<style>
    .w-5 {
        display: none;
    }
</style>
