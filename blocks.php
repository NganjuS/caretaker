<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('Location:login.php');
}
include_once('top.php');
?>
<script type="text/javascript">

$('#blocksTab').addClass("active"); 

</script>
<!-- content area-->
<!-- header -->
<link href="apartment.css" rel="stylesheet"/>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="row top-header container-fluid">
<div class="col-sm-6">
<button id="new" class="btn btn-success glyphicon glyphicon-plus-sign" disabled="true"> New</button>
<button id="edit" class="btn btn-success glyphicon glyphicon-edit" disabled="true"> Edit</button>
<button id="save" class="btn btn-success glyphicon glyphicon-save"> Save</button>
<button id="refresh" class="btn btn-info glyphicon glyphicon-refresh"> Refresh</button>
<button id="delete" class="btn btn-danger glyphicon glyphicon-trash" disabled="true"> Delete</button>
<div id="requiredError" data-role="popup" ></div>     
</div>
<div id="dialog-confirm" title="Deleting Record" style="display: none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Are you sure you want to delete this record ?</p>
</div>
<div class="col-sm-6">
<div class="input-group">
    <div class="ui-widget">
         <input type="text" id="searchblocks" class="form-control" placeholder="search with name.."/>
    </div>
<span class="input-group-btn">
        <button id= "search" class="btn btn-default" type="button" disabled="true">Search</button>
</span>
</div>
</div>
</div>
<hr />
<!-- end header -->
<div class="row">
 <div class="col-md-4"></div>
 <div class="col-md-4">
    <div class="form form-group">
      <label>Block Name</label>
      <input type="text" name="blockname" id="blockname" class="form form-control"/>
    </div>
    <div class="form form-group">
      <label>Block Description</label>
      <textarea class="form form-control" id="blockdesc"></textarea>
    </div>
    <div class="form form-group">
        <label>Estate</label>
        <div class="row">
           <div class="col-md-10">
               <select class="form form-control" id="estateid"></select>
           </div>
           <div class="col-md-2">
               <button id="estatebtn" class="glyphicon glyphicon-edit"></button>
           </div>
            
        </div>
            
            
    </div>
 </div> 
 <div class="col-md-4"></div>  
</div>






<!-- end of content area-->
<script type="text/javascript" src="pagesjs/block.js"></script>
<script type="text/javascript" src="pagesjs/shared.js"></script>
<script type="text/javascript" src="myjs/notify.min.js"></script>
<?php


include_once('bottom.php');
?>