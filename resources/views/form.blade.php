<div>
    <h2>HTTP Request form</h2>
    <form action="/userform" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter your username">
        <input type="text" name="password" placeholder="Enter your password">
        <button>Submit</button>
    </form>
</div>
