@if(Auth::check())
  <div class="parallax overflow-hidden bg-blue-400 page-section third">
    <div class="container parallax-layer" data-opacity="true">
      <div class="media v-middle">
        <div class="media-left text-center">
          <a href="#">
            <img src="{{ Auth::user()->getAvatarUrl() }}" alt="people" class="img-circle width-80" />
          </a>
        </div>
        <div class="media-body">
          <h1 class="text-white text-display-1 margin-v-0">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</h1>
          <p class="text-subhead">
            <a class="link-white text-underline"
               href="{{route('user.profile', Auth::user()->username) }}">View public profile</a></p>
        </div>

      </div>
    </div>
  </div>
@endif
