<?php  defined('C5_EXECUTE') or die("Access Denied.");
/*
Added by John Liddiard (aka JohntheFish) www.c5magic.co.uk
*/
$form = Loader::helper('form');
?>

<div class="themeSwitcher" style="display:none">
	<form method="post" action="<?php  echo $this->action('switch_theme')?>" class="theme-switcher">
		<input type="hidden" name="theme" value="<?php echo $selectedTheme;?>" >
		<input type="submit" name="next_theme" value=">" >
	</form>
</div>
