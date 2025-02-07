<div>
    <h1>Upload</h1>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button>upload</button>
    </form>
</div>
