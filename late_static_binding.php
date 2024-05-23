<?php
class Parent{
    public static function who(){
        echo __CLASS__;
    }
    public static function tset(){
        static::who();
    }  
}
class Child extends Parent{
    public static function who(){
        echo __CLASS__;
    }
}
Child::test();
?>