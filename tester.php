<?php
require_once('aside/sessionsmanager.php');
/*
include_once('includes/dbconnection.php');                                                                                                                                                                                  
$conn = Dbconnector::returnconnection();
$row = $conn->query('select * from roles');
//echo $row->fetch(PDO::FETCH_NUM)[0] != '';
foreach($row->fetchAll(PDO::FETCH_ASSOC) as $key => $value)
{
    echo($value);
    echo('</br>');
}

echo('looooooooooooool');
*/

//new SessionManager(function(){ echo 'looooooooooool'; });

//$k = new RolesVerifier();
//new SetAllowedRoles();
//echo($k->checkIfAllowedPage());
//echo('run force<br/>');
//print_r([5,6,7,4,3,8,9]);
var_dump($_SESSION);
echo(sessiom_id());

?>


<!--
pisa reg details<div id="txt"></div>
<input type="file" name="filen" id="filename">
<button id="submit" >submit</button>
-->

<script type="text/javascript">
	/*$(document).ready(function(){
        $('#filename').bind('change', function()
       {
        var formData = new FormData();
           formData.append('filename', $('#filename')[0].files[0]);
           formData.append('dope', 'hello');
	       $.ajax(
           {
            url : 'test.php',
            type : 'POST',
            processData : false,
            contentType : false,
            data : formData,
            success : function(data){ $('#txt').html(data); },
            error : function(error){ console.log('an error occurred'); }
           });
        
       });
       
       
	   $('#submit').click(function(event){
	       console.log('looooooooooool')
          
           console.log($('#filename')[0].files[0])
           
	   });
	});
*/
</script>

