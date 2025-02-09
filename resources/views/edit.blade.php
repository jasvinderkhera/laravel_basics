<div>
    <h2>Update Student Data</h2>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" placeholder="Enter Name" value="{{$data->name}}">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter Email" value="{{$data->email}}">
        <br>
        <br>
        <input type="tel" name="phone" placeholder="Enter phone" value="{{$data->phone}}">
        <br>
        <br>
        <button>Update</button>
        <a href="/students">Cancel</a>
</form>
</div>
