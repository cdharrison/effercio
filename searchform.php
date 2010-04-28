<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
	<script type="text/javascript">
		function click(thisfield, defaulttext) { if (thisfield.value == defaulttext) { thisfield.value = "Search"; } }
		function clickclear(thisfield, defaulttext) { if (thisfield.value == defaulttext) { thisfield.value = ""; } }
		function clickrecall(thisfield, defaulttext) { if (thisfield.value == "") { thisfield.value = defaulttext; } }
	</script>
	<form method="get" action="<?php echo get_settings('home'); ?>/<?php echo $_SERVER['/PHP_SELF']; ?>" id="search" name="search" onChange="document.search.submit()">
		<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" value="Search" onload="click(this,'')" onclick="clickclear(this,'Search')"  onblur="clickrecall(this,'Search')" />
		<input type="submit" value="Search" />
	</form>
