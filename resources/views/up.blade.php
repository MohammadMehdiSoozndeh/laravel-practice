<h2 style="font-family: 'Nunito', sans-serif; color: blueviolet">
    Upload File
</h2> <br><br>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"> <br><br>
    <button type="submit">Upload it</button>
</form>
