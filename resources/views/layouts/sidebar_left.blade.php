<div class="col-md-3">
                <div class="box-card">
                    <img src="{{asset('image/BG.jpg')}}" style="width: 100%">
                        <div class="panel-footer">
                            <div class="profile-result">
                            <img src="{{asset('image/Spongebob.jpg')}}">
                        </div>
                        <span>
                            <h4 class="card-title" style="margin-bottom: 0;"><b>{{ Auth::user()->name }}</b></h4>
                            <p>{{ Auth::user()->username }}</p>
                        </span>
                    <div class="button_bg">

                        <a href="{{route('followersUser')}}" class="btn btn-default btn-sm">Followers ( {{$followersUser->count()}} )</a>
                        <a href="{{route('followingUser')}}" class="btn btn-default btn-sm">Following ( {{$followingUser->count()}} )</a>

                    </div>

                    </div>
                </div>
 </div>