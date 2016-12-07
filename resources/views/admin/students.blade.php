


<table class="table">
  <caption style="font-style:bold; margin-left:16px;">Registered Students</caption>
  <tr>
    <th>Avatar</th>
    <th>Full Name</th>
    <th>Mat No</th>
    <th>Account Status</th>
    <th>Email Activation</th>
    <th>Make Admin</th>
    <th>Danger Zone</th>
  </tr>
  @foreach ($students as $student)

    <tr class="{{($student->active == 1)?'success white-text':'danger white-text'}} {{($student->activated == 1)?'success white-text':'warning white-text'}}">
      <td ><img src="{{ $student->profile->imgPath }}" alt="people" class="img-circle width-20" /></td>
      <td ><div style="display: block">{{$student->first_name}} {{$student->last_name}}</div></td>
      <td><div>{{$student->matricNo}}</div></td>
      @if ($student->active == 0)
        <td><a href="/activate-account/{{$student->user_id}}" class="btn btn-primary">Activate</a> </td>
      @else
        <td><a href="/deactivate-account/{{$student->user_id}}" class="btn btn-danger">Deactivate</a> </td>
      @endif
      @if ($student->activated == 0)
        <td><a href="/send-mail-verification/{{$student->user_id}}" class="btn btn-primary">Send Verification</a> </td>
      @else
        <td>Email verified</td>
      @endif

      @if ($student->role == 'admin')
        <td><a href="/make-user/{{$student->user_id}}" class="btn btn-success">Make User</a> </td>
      @else
        <td><a href="/make-admin/{{$student->user_id}}" class="btn btn-success">Make Admin</a></td>
      @endif

      <td> </td>
      <td><a href="#" class="btn btn-danger">Delete</a> </td>
    </tr>
  @endforeach
</table>
