<h1>Upload File</h1>

<form action = "upload" method="POST"  enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="name"> <br><br>
    <input type="text" placeholder="Surname" name="surname"> <br><br>
    <input type="email" placeholder="Email" name="email"> <br><br>
    <input type="file" name="file"> <br> <br>
    <button type="submit"> submit</button>
</form>