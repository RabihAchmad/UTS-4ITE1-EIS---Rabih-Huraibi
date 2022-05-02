@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">

            @include('layouts.sidebar_left')

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Followers ( {{$followersUser->count()}} )</h4></div>
                <div class="panel-body" style="background-color: lavender;">

    
            @foreach($followersUser as $follower)

            <div class="col-md-4">
                <div class="box-card">
                    <img src="{{asset('image/BG.jpg')}}" style="width: 100%">
                        <div class="panel-footer">
                            <div class="profile-result">
                            <img src="{{asset('image/Spongebob.jpg')}}" style="height: 50px;">
                        </div>
                        <span>
                            <h4 class="card-title" style="margin-bottom: 0;"><b>{{$follower->name}}</b></h4>
                            <p>{{$follower->username}}</p>
                        </span>

                
                        <a href="#" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>Delete</a>
                    </div>
                </div>
            </div>
            
    
    @endforeach
  
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

<style type="text/css">
    .profile-result img{
        width: 27%;
        border-radius: 50%;
        height: 61px;
        border: 2px solid #fff;
    }
    .profile-result{
        margin-top: -38px;
    }
    .box-card{
        box-shadow: 0 1px 5px #888888;
    }
    .button_bg a{
        background-color: gray;
        color: #fff;
    }

</style>