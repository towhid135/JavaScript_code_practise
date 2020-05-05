<html>
<head> </head>

<body>

<form id = "form1">
<p> Write something and then click on the window </p>
<input type = "text" name = "text1" value = "Change or replace the text">
<img id="spinner" src="spinner2.gif" height="25" 
      style="vertical-align: middle; display:none;">
</form>
<hr/>
<div id = "div1"> </div>
<hr/>



<script type = "text/javascript" src = "jquery.min.js"> </script>
<script type = "text/javascript">

$('#form1').change( function(event){
	$('#spinner').show();
	var form = $('#form1');
	var txt = form.find('input[name="text1"]').val();
	$.post('echo.php',{'val':txt,'name':'towhid'},function(reply,status)
		{
			$('#div1').empty().append(reply+" your status is "+status);
			$('#spinner').hide();
		}
	).error(function(){
		$('#form1').css('background-color','red');
		alert('Something going wrong!');
	})
} )

</script>
</body>