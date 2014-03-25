<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * isExistString
 *
 * @access	public
 * @param	array
 * @param	string
 * @return	boolean
 *
 */
if ( ! function_exists('isExistString'))
{
	function isExistString($array, $string)
	{
		foreach($array as $str)
		{
			if($str == $string)
				return TRUE;
		}

		return FALSE;
	}
}

// ------------------------------------------------------------------------