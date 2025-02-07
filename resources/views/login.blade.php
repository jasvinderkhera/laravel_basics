<div>
    <h2>Login Page</h2>
    <form action="login" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter your Username">
        <input type="password" name="password" placeholder="Enter your Password">
        <button>Login</button>
    </form>
</div>
