<?php
namespace  App\Support;

 class Helper {
     public static function calHourTwoDate($start, $end)
     {
         $t1 = StrToTime($start);
         $t2 =  StrToTime($end);
         $diff = $t2-$t1;
         return round($diff / ( 60 * 60 ),2);
     }
     public static function startsWith($haystack, $needle) // full String - param
     {
         // search backwards starting from haystack length characters from the end
         return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
     }

     public static function endsWith($haystack, $needle) //full String - param
     {
         // search forward starting from end minus needle length characters
         return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
     }

     public static   function  checkOperator($msisdn) {
         $msisdn = self::full_msisdn ( $msisdn, '84' );

         $operator_prefixs = array (
             "VNP" => "8491, 8494,84123,84124,84125,84127,84129,8488",
             "VMS" => "8490,8493,84120,84121,84122,84126,84128,8489",
             "VTT" => "8496,8497,8498,8416",
             "SPHONE" => "8495",
             "VNM" => "8492,84186,84188",
             "VSAT" => "992"
         );
         if (self::startsWith ( $msisdn, "849" ) || self::startsWith ( $msisdn, "848" ) ) {
             $operid = substr ( $msisdn, 0, 4 );
         } else if (self::startsWith ( $msisdn, "8416" )) {
             $operid = substr ( $msisdn, 0, 4 );
         } else if (self::startsWith ( $msisdn, "841" )) {
             $operid = substr ( $msisdn, 0, 5 );
         }

         foreach ( $operator_prefixs as $key => $val ) {
             if (strpos ( $val, $operid ) !== false) {
                 return $key;
             }
         }
         return "";
     }
     public static function full_msisdn($msisdn, $prefix) {
         if (!self::validMsisdn ( $msisdn ))
             return $msisdn;
         $msisdn = trim ( $msisdn );
         if (self::startsWith ( $msisdn, "0" )) {
             $msisdn = substr ( $msisdn, 1 );
         }

         if (! self::startsWith ( $msisdn, $prefix )) {
             $msisdn = $prefix . $msisdn;
         }
         return $msisdn;
     }
     public static function validMsisdn($msisdn) {
         return preg_match ( "/^(0084|84|0|)(8|9|12|16|18)(\d{8})$/", $msisdn, $matches ) ? true : false;
     }

     public static function addCard($arr)
     {
         $postinfo = json_encode($arr);
         $URL = 'http://tool.doithe24.com/card/input';
         $ch = curl_init($URL);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
         $ret = curl_exec($ch);
         curl_close($ch);
         return json_decode($ret,true);
     }
 }
?>