<p>
@if(isset($errors))
	@foreach($errors as $error)
	{{$error}} <br/>
	@endforeach
@endif
</p>
	<form method = "post">
		<input type="text" name="mail">
		<input type="text" name="pass">
		<input type="submit" name="sbm" value="Login">
		<?php echo csrf_field()?>
	</form>
