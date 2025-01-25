<div>
    <h1>Students Table</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>
</div>
