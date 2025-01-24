@include('common.header')


<x-message-banner msg="User logged in Successfully" class="success"/>
<x-message-banner msg="User Registered in Successfully" class="success"/>


<br>
<br>
<br>

<x-message-banner msg="Error user not found" class="error" />

<h1>Homepage</h1>


<style>
    .success{
        background-color: lightgreen;
        color: white;
        padding: 5px 10px;
        display: inline-block;
        margin: 5px 0;
    }
    .error{
        background-color: red;
        color: white;
        padding: 5px 10px;
        display: inline-block;
        margin: 5px 0;
    }
</style>
