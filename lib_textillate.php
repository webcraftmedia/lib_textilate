<?php
namespace LIB;
class lib_textillate extends \LIB\lib_js{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return \SYSTEM\WEBPATH(new \SYSTEM\PLIB(),'textillate/lib/jquery.textillate.js');}
    public static function version(){
        return '<a href="https://github.com/jschr/textillate" target="_blank">https://github.com/jschr/textillate</a> (commit: e34a9938c5)';}
}