@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">

            @include('layouts.sidebar_left')

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Notifications ( {{$notification->count()}} )</h4></div>
                <div class="panel-body" style="background-color: lavender;">

    
            @foreach($notification as $notify)

            <div class="col-md-4">
                <div class="box-card">
                    <img src="{{asset('image/BG.jpg')}}" style="width: 100%">
                        <div class="panel-footer">
                            <div class="profile-result">
                            <img src="{{asset('image/Spongebob.jpg')}}">
                        </div>
                        <span>
                            <h4 class="card-title" style="margin-bottom: 0;"><b>{{$notify->name}}</b></h4>
                            <p>{{$notify->username}}</p>
                        </span>

                        <a href="{{route('accept',$notify->id)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                        </svg></a>
                        <a href="{{route('decline',$notify->id)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg></a>
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