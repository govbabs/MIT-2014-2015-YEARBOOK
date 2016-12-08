<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
  <div class="panel-heading panel-collapse-trigger">
    <h4 class="panel-title">My Account</h4>
  </div>
  <div class="panel-body list-group">
    <ul class="list-group list-group-menu">
      <li class="list-group-item active"><a class="link-text-color" href="{{ url('/') }}">Profile</a></li>

      @if(Auth::user()->role == "admin")
        <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="/new-post">Add Post</a></li>
          <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="/students">View Students</a></li>
          <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="/mass-upload">Mass Upload</a></li>
      @endif
      <li class="list-group-item">
        <a class="link-text-color" href="{{ route('logout') }}"><span>Logout</span></a>
      </li>

    </ul>
  </div>
</div>
