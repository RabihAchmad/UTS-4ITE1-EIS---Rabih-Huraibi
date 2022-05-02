@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Search result</div>
    </div>

        <div class="row">
        @include('layouts.sidebar_left')

        <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Search result for:<b> {{Request::get('search')}}</b></h4></div>
                <div class="panel-body" style="background-color: lavender;">

    @if(count($searchUsers)>0)
            @foreach($searchUsers as $user)

            <div class="col-md-4">
                <div class="box-card">
                    <img src="{{asset('image/BG.jpg')}}" style="width: 100%">
                        <div class="panel-footer">
                            <div class="profile-result">
                            <img src="{{asset('image/Spongebob.jpg')}}">
                        </div>
                        <span>
                            <h4 class="card-title" style="margin-bottom: 0;"><b>{{$user->name}}</b></h4>
                            <p>{{$user->username}}</p>
                        </span>
                        <div class="button_bg">
                            <a href="{{route('profile',$user->name)}}" class="btn btn-default btn-block">Show Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            
    
    @endforeach
    @else

        no result!

    @endif
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
        height: 55px;
        border: 2px solid #fff;
    }
    .profile-result{
        margin-top: -38px;
    }
    .box-card{
        box-shadow: 0 1px 4px #888888;
    }
    .button_bg a{
        background-color: #39393c;
        color: #fff;
    }

</style>