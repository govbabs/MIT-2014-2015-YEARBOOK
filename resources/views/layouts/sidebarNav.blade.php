<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
  <div class="panel-heading panel-collapse-trigger">
    <h4 class="panel-title">My Account</h4>
  </div>
  <div class="panel-body list-group">
    <ul class="list-group list-group-menu">
      <li class="list-group-item active"><a class="link-text-color" href="student-profile.blade.php">Profile</a></li>

      <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="#"><span class="badge pull-right">42</span>Notifications</a></li>

      <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="#">Friends</a></li>

      <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="#">Lecturers</a></li>
      @if(Auth::user()->role == "admin")
          <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="/students">View Students</a></li>
          <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="/mass-upload">Mass Upload</a></li>
      @endif
      <li class="list-group-item"><a class="link-text-color" href="login.blade.php"><span>Logout</span></a></li>

    </ul>
  </div>
</div>
