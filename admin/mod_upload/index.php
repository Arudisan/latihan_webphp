<?php
include_once ('uploadctrl.php');
?>
<form action="mod_upload/uploadctrl.php" method="POST" enctype="multipart/form-data">
<div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label">upload </label>
  </div>  
  <div class="col-md-5"> 
    <input type="file"name="urlfile" class="form-control">  </div>
    <div class="col-md-1"> <button type="submit" name="btnupload">Upload  </button></div>
</div>
</form>