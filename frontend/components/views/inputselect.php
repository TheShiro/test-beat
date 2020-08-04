<?php
// print_r($value);
?>

<input type="text" name="Soccer[team_id]" id="soccer-team_id" class="form-control" aria-required="true" list="teams" value="<?= $value ?>">
<datalist id="teams">
	<?php foreach($data as $k => $item): ?>
		<option value="<?= $item ?>" />
	<?php endforeach; ?>
</datalist>