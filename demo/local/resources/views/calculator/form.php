<form method="post">
	<input type="text" name="st1"/><br/>
	<select name='pt'>
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="text" name="st2"/><br/>
	<input type="text" name="kq" value="<?php if(isset($kq)){ 	echo $kq;}?>"/><br/>
	<input type="submit" name="sbm" value="Tinh"/>
	<?php echo csrf_field()?>
</form>



