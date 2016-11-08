

<div>
  <form action="/mass-upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="fileToUpload">Select Excel file to upload:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <p class="help-block">This file must be an excel file.</p>
    </div>
      <input type="submit" class="btn btn-default" value="Upload Student Details" name="submit">
  </form>

</div>
