@extends('layouts.app')

@section('content')
<div class="container">

@foreach($user as $u)
        <div class="jumbotron">
                <img src="{{asset('image/spongebob.jpg')}}">
                <h2>{{$u->username}}</h2>
                <p>{{$u->username}}</p>
                
        </div>
        

@endforeach

</div>
@endsection

<style type="text/css">
    .jumbotron{
        background: url(../image/BG.jpg) center;
    }

    .jumbotron img{
            width: 250px;
            border-radius: 60%;
            height: 190px;
            border: 5px solid #fff;
    }

    .jumbotron h2, p{
        color: white;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-bottom: 0;
    }
</style>