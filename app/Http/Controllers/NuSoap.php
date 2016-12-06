<?php
header("Content-type: text/html; charset=utf-8");
use App\Test;
require_once("lib/NuSoap/nusoap.php");

$server=new nusoap_server();
// 避免乱码
$server->soap_defencoding = 'UTF-8';
$server->decode_utf8 = false;
$server->xml_encoding = 'UTF-8';
$server->configureWSDL ('test'); // 打开 wsdl 支持
/*
注册需要被客户端访问的程序
类型对应值： bool->"xsd:boolean"    string->"xsd:string"
int->"xsd:int"     float->"xsd:float"
*/
//hello方法
//$server->register ( 'hello', // 方法名
//    array ("name" => "xsd:string" ), // 参数，默认为 "xsd:string"
//    array ("return" => "xsd:string" ) ); // 返回值，默认为 "xsd:string"
//testDB方法
//$server->register ( 'testDB', // 方法名
//    array ("id" => "xsd:integer" ), // 参数，默认为 "xsd:string"
//    array ("return" => "xsd:string" ) ); // 返回值，默认为 "xsd:string"

//$server->register ( 'api', // 方法名
//    array ("verifyCode" => "xsd:string","mode" => "xsd:string","size" => "xsd:int" ), // 参数，默认为 "xsd:string"
//    array ("return" => "xsd:string" ) ); // 返回值，默认为 "xsd:string"
$server->register ( 'api', // 方法名
    array ("apiName"=>"xsd:string","verifyCode" => "xsd:string","mode" => "xsd:string","size" => "xsd:int" ), // 参数，默认为 "xsd:string"
    array ("return" => "xsd:string" ) ); // 返回值，默认为 "xsd:string"
//isset  检测变量是否设置
// $HTTP_RAW_POST_DATA = isset ( $HTTP_RAW_POST_DATA ) ? $HTTP_RAW_POST_DATA : '';
// //service  处理客户端输入的数据
// $server->service ( $HTTP_RAW_POST_DATA );

$server->service(file_get_contents("php://input"));
/**
 * 供调用的方法
 * @param $name
 */
function hello($name) {
        return "Hello,  { $name } !";
}

function testDB($id){
        $test = Test::find($id);
//        $test = Test::all();
//        $test = DB::table('test')->find($id);
        return $test;
}

//function api($verifyCode='',$mode='size',$size=10){
//        if($mode=='size' && $size>0 && $size<100){
//                $result = Test::inRandomOrder()->limit($size)->get();
//                return $result->toString();
//        }
//}

function api($apiName,$verifyCode,$mode='size',$size=10){
        $verifyCode = \App\ApiVerifycode::where('verifycode',$verifyCode)->get();
        if(!$verifyCode){
                return "wrong verifycode!";
        }
        if($apiName!='express'){
                return "wrong apiName!";
        }
        if($mode=='size' && $size>0 && $size<100) {
                $results = \App\Info::inRandomOrder()->limit($size)->get();
                return $results;
        }
}
die();
