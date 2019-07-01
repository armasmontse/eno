<?php

/**
 * Wrapper sobre var_dump
 * @param   $variable
 * @return  var_dump con <pre> tags
 */
function vd($variable)
{
	echo "<pre>";
	var_dump($variable);
	echo "</pre>";
}

/**
 * Wrapper sobre var_dump que además ejecuta die
 * @param   $variable
 * @return  var_dump con <pre> tags
 */
function dd()
{
	cltvo_print_r( func_get_args() ); 
}
