<h1>Login Page</h1>
<h2>{{$page}}</h2>
<!-- <h3>{{rand()}}</h3> -->
 <!-- <h3>{{$users[2]}}</h3> -->
  @if($page=="Admin Login Page")
  <h2>This is Admin Login Page</h2>
  @elseif($page=="User Login Page")
  <h2>This is User Login Page</h2>
  @else
  <h2>Other Page</h2>
  @endif


  <div>
    @foreach ($users as $users )
    <h3>{{$users}}</h3>
    @endforeach
  </div>


  <div>
    @for ($i=0;$i<10;$i++)
    <h3>{{$i}}</h3>
    @endfor
  </div>