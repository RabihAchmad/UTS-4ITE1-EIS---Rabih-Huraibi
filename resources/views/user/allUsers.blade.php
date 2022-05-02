@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">All Users</div>
    </div>

        <div class="row">
        @include('layouts.sidebar_left')

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>All users</h4></div>
                <div class="panel-body" style="background-color: lavender;">

    
            @foreach($allUsers as $user)

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
                        
                <?php
                    $if_null = App\Models\Follower::where('follow_id','=', $user->id)->first();

                    if (is_null($if_null)) {
                        ?>
                        <a href="{{route('following', $user->id)}}" class="btn btn-success">Follow</a>

                        <?php
                    }
                        else {?>
                        
                        <a href="" class="btn btn-success w-100 disabled">Following</a>
                <?php }?>


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
        height: 55px;
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