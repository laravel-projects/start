<?php 

if (!function_exists('str_exp')) {
    /**
     * Generate a string export.
     *
     * @param string $string
     * @param string $delimiter
     * @param int    $num
     * @param int    $limit
     * @param string $default
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
 

if (!function_exists('str_username')) {
    /**
     * Generate a username
     *
     * @param string $firstname
     * @param string $lastname 
     *
     * @return string
     */
     function str_username($firstname,$lastname,$i=null){
          $username = str_slug($firstname).'.'.str_slug($lastname);
          $username = (!empty($i)&&($i>0))? $username.'.'.$i : $username ;
          $user = \DB::table('users')->where('username',$username)->first();
          if (!empty($user->id)) {
               $i = (!empty($i))? ($i + 1) : 1 ;
               return str_username($firstname,$lastname,$i);
          }
          return $username;
     }
}
 