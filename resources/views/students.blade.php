<div>
    <h1>Students Table</h1>
    <form action="search" method="get">
        <input type="text" name="search" placeholder="Search Here" value="{{@$search}}">
        <button>Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->created_at}}</td>
            <td>
                <a href="{{'delete/'.$student->id}}">Delete</a>
                <a href="{{'edit/'.$student->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
