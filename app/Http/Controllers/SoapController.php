<?php

namespace App\Http\Controllers;

require_once ("lib/nusoap.php");

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class SoapController extends Controller
{
    public function index(){
        $server=new soap_server();
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
        $server->register ( 'GetTestStr', // 方法名
            array ("name" => "xsd:string" ), // 参数，默认为 "xsd:string"
            array ("return" => "xsd:string" ) ); // 返回值，默认为 "xsd:string"
        //isset  检测变量是否设置
        $HTTP_RAW_POST_DATA = isset ( $HTTP_RAW_POST_DATA ) ? $HTTP_RAW_POST_DATA : '';
        //service  处理客户端输入的数据
        $server->service ( $HTTP_RAW_POST_DATA );
        /**
         * 供调用的方法
         * @param $name
         */
        function GetTestStr($name) {
            return "Hello,  { $name } !";
        }
    }
}
