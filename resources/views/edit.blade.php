<h1 style="font-family: 'Nunito', sans-serif; color: darkred">Edit Name</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label>
        <input style="font-family: 'Nunito', sans-serif;color: #a0aec0"
               type="text" name="name"
               value="{{$data['name']}}">
    </label> <br><br>
    <button
        style="border-radius: 8px;font-family: 'Nunito', sans-serif;color: #a0aec0"
        type="submit">
        apply
    </button>
</form>
