<div class="row">

<!-- Side Nav -->
    <div class="col s3">
        <div class="hide-on-small-only">
            <div class="collection">
                <a href="/channels" class="collection-item">Channels <span class="new badge">4</span></a>
                <a href="#" class="collection-item">Favourites <span class="new badge">0</span></a>
                <a href="#" class="collection-item" id="view-all-episodes">See all episodes
                    <span class="badge">10+</span>
                </a>
                @can('guest', Auth::check())
                <a href="{{ URL::to('about') }}" class="collection-item">About</a>
                <a href="{{ URL::to('privacypolicy') }}" class="collection-item">Privacy Policy</a>
                <a href="{{ URL::to('faqs') }}" class="collection-item">FAQs</a>
                @endcan
            </div>
        </div>
    </div>

    <!-- Feeds Area -->
    <div class="col s12 m8 l9">
           
        <h4 class="center-align padcast-page-header">Podcast for Suya loves</h1>
        

        <p class="flow-text center-align padcast-page-sub-header">
            The Laravel Podcast brings you Laravel and PHP development news and discussion. The podcast is hosted by Matt Stauffer and regular guests include Taylor Otwell (the creator of Laravel) and Jeffrey Way (the creator of Laracasts).
        </p>

       <div class="row podcast">
            <div class="col s3">
                <a style="color:#2C3E50" href="/episode/1">
                    <img class="responsive-img podcast-img" src="{!! asset($episodes->first()->image) !!}">
                </a>
            </div>

            <div class="col s9 details">
                <span class="podcast-episode-date">{{$episodes->first()->created_at->diffForHumans()}}</span>
                <span class="tag podcast-episode-date">{{$episodes->first()->channel->channel_name}}</span>
                <a style="color:#2C3E50" href="/episode/1">
                    <h5 class="podcast-episode-title">{{$episodes->first()->episode_name}}</h5>
                </a>
                <div>
                    <audio width="10px;" src="{{$episodes->first()->audio_mp3}}" preload="auto" />
                </div>
                <p>
                    In this episode, the crew discusses Linode down time, 
                    server migrations, editors, Will Smith, and Mario Kart. Most importantly, 
                    Jeffrey & Taylor finally disagree.
                </p>

                <div class="podcast-actions">

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    
                    @if( Auth::check() )
                        <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" >
                    @endif         

                    <input type="hidden" id="episode_id" value="{{ $episodes->first()->id }}">
                    
                    <span style="padding-right:15px;">
                         <i class="fa fa-heart social-btn like-btn {{ $episodes->first()->like_status }}" like-status="{{ $episodes->first()->like_status }}"> {{ $episodes->first()->likes }}</i>
                    </span>

                    <span style="padding-right:15px;">
                        <i class="social-btn fa fa-twitter"></i>
                    </span>                    
                    <span style="padding-right:15px;">
                        <i class="social-btn fa fa-facebook"></i>
                    </span>            
                </div>
            </div>       
        </div>
        
        @foreach($episodes->take(4) as $podcast)
        <a style="color:#2C3E50" href="/episode/{{$podcast->id}}">
            <div class="row podcast">
                <div class="col s3">
                    <img class="responsive-img podcast-img" src="{{ asset($podcast->image) }}">
                </div>

                <div class="col s9 details">
                    <span class="podcast-episode-date">{{ $podcast->created_at->diffForHumans() }}</span>
                    <span class="tag podcast-episode-date">{{$podcast->channel->channel_name}}</span>
                    <h5 class="podcast-episode-title">{{ $podcast->episode_name }}</h5>
                    
                    <p>
                        In this episode, the crew discusses Linode down time, 
                        server migrations, editors, Will Smith, and Mario Kart. Most importantly, 
                        Jeffrey & Taylor finally disagree.
                    </p>

                </div>     
            </div>
        </a>
        @endforeach

        <p class="center-align">
            <a href="/episode" class=" waves-effect waves-light btn">VIEW OLDER EPISODES</a>
        </p>
    </div>
</div>