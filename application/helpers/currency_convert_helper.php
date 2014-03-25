<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * currency_convert_helper
 *
 *
 */
if ( ! function_exists('visitor_countryCode'))
{
	function visitor_countryCode()
	{
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		    $remote  = $_SERVER['REMOTE_ADDR'];
		    $result  = "Unknown";
		    if(filter_var($client, FILTER_VALIDATE_IP))
		    {
		        $ip = $client;
		    }
		    elseif(filter_var($forward, FILTER_VALIDATE_IP))
		    {
		        $ip = $forward;
		    }
		    else
		    {
		        $ip = $remote;
		    }

		    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

		    if($ip_data && $ip_data->geoplugin_countryName != null)
		    {
		        $result = $ip_data->geoplugin_currencyCode;
		    }

		    return $result;
	}
}

if( ! function_exists('convertCurrency'))
{	
	function convertCurrency($amount,$from_currency,$to_currency)
	{
		$string = $amount.strtolower($from_currency)."=?".strtolower($to_currency);
		$google_url = "http://www.google.com/ig/calculator?hl=en&q=".$string;
		$google_url = "http://www.google.com/finance/converter?a=$amount&from=$from_currency&to=$to_currency";
		$result = file_get_contents($google_url);
		$result = explode('bld', $result);
		$confrom = explode('>', $result[1]);
		$conto = explode(' ', $confrom[1]);

		$converted = round($conto[0], 2);
			
		return $converted;
	}
}

// ------------------------------------------------------------------------
