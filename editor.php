<?php
if($_POST['json']){
  $fh = fopen('data.js', 'w') or die('Failed to open file for writing.');
  fwrite($fh, $_POST['json']);
}
?>
<?php require('pre.php');?>
  <div id="content">
    <div class="bold">TODO: auth, versions, etc.</div>
    <a id="refresh" class="faux-button">Refresh</a><br/>
    <a id="reload" class="faux-button">Reload</a><br/>
    <div>fields go here</div>
    <div>name</div>
    <div>class</div>
    <div>multiline</div>
    <div>label</div>
    <div>url</div>
    <a id="new-item" class="faux-button">New Item</a>
    <div id="edit-area">
    </div>
    <form id="json_form" action="" method="POST" class="hidden">
      <textarea id="json" name="json"></textarea>
      <br/>
      <input type="submit" value="Update data!"/>
    </form>
    <a id="submit-data" class="faux-button">Submit Data</a>
  </div>
  
  <script type="text/javascript" src="editor.js"></script>
<?php require('post.php');?>
