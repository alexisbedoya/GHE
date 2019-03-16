
<html>
<title>Seleccione su cargo</title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- Modal -->
<div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 16px;"><div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content"><div class="modal-header"><button class="close" data-dismiss="modal" type="button">×</button>
        <h4 class="modal-title">Seleccione su cargo :</h4></div>
        <div class="modal-body">

        
<form name="formulario" method="POST" action="test.php"> 
<select name="tipo"> 
<option value="Coordinador">Coordinador</option> 
<option value="Empleado">Empleado</option> 
</select> 
<br><br>
<input type="submit" value="Guardar datos"> 

</form> 
     </div>
</div></div></div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
 $(function(){
  $("#myModal").modal();
 });
</script> 

 
