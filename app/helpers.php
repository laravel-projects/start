<?php 

if (!function_exists('str_exp')) {
    /**
     * Generate a string export.
     *
     * @param string $string
     * @param string $delimiter
     * @param array  $num
     * @param bool   $limit
     * @param bool   $default
     *
     * @return string
     */
	function str_exp($string,$delimiter=",",$num=1,$limit=0,$default=""){
		$num = $num - 1;
		$arry = explode($delimiter,$string);  
		$data = (!empty($arry[$num]))? $arry[$num] : $default ;
		$data = ($limit > 0)? str_limit($data,$limit,'') : $data ; 
		return $data;
	}
}
 