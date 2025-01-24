<div>

<!-- @if ($errors->any())

@foreach ($errors->all() as $error)
<div style="color:red">
    {{$error}}
</div>
@endforeach

@endif -->
    <h2>User Form</h2>

    <form action="adduser" method="post">
        @csrf
        <div class="formwrapper">
            <input type="text" placeholder="Enter your Name" name="username">
            <p style="color:red">@error('username'){{$message}}@enderror</p>
        </div>
        <div class="formwrapper">
            <input type="text" placeholder="Enter your email" name="email">
            <p style="color:red">@error('email'){{$message}}@enderror</p>
        </div>
        <div class="formwrapper">
            <select name="city" id="">
                <option value="">Select City</option>
                <option value="delhi">delhi</option>
                <option value="noida">noida</option>
                <option value="gurgaon">gurgaon</option>
            </select>
            <p style="color:red">@error('city'){{$message}}@enderror</p>
        </div>
        <div class="formwrapper">
            <h5>Skills</h5>
            <input type="checkbox" name="skill[]" value="javascript" id="javascript">
            <label for="javascript">Javascript</label>
            <input type="checkbox" name="skill[]" value="php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="node" id="node">
            <label for="node">Node</label>
            <p style="color:red">@error('skill'){{$message}}@enderror</p>
        </div>
        <div class="formwrapper">
            <h5>Developer type</h5>
            <input type="radio" id="frontend" value="frontend" name="developer">
            <label for="frontend">frontend</label>
            <input type="radio" id="backend" value="backend" name="developer">
            <label for="backend">backend</label>
            <p style="color:red">@error('developer'){{$message}}@enderror</p>
        </div>
        <div class="formwrapper">
            <h5>Age</h5>
            <input type="range" name="age" min="18" max="60" id="">
        </div>
        <div class="formwrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    .formwrapper{
        margin: 10px;
    }
    .formwrapper input{
        width: 300px;
        height: 40px;
    }
    .formwrapper input[type="checkbox"],
    .formwrapper input[type="radio"]
    {
        height: auto;
        width: auto;
    }
    .formwrapper button{
        margin: 10px 0;
        padding: 8px 15px;
    }
</style>
