@include('common.header')


<x-message-banner msg="User logged in Successfully" class="success"/>
<x-message-banner msg="User Registered in Successfully" class="success"/>


<br>
<br>
<br>

<x-message-banner msg="Error user not found" class="error" />

<h1>Homepage</h1>

<h2>{{url()->previous()}}</h2>

<a href="{{URL::to('about',['jasvinder'])}}">About Jasvinder</a>
<a href="{{route('hp')}}">Go to Help</a>


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
