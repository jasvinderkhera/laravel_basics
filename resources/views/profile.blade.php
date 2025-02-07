<div>
    <h2>Profile Page</h2>

    @if (session('username'))
    <h1>Welcome, {{session('username')}}</h1>
    @else
    <h1>No user found!</h1>
    @endif

    <a href="logout">logout</a>
</div>
