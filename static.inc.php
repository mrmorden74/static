<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class StaticClass {
    private static $var;
    
    public static function getName () {
        return 'Mein Name ist '. __CLASS__;
    }
    public static function showNow () {
        return self::now();
    }
    private static function now () {
        return date('d.m.y h:i:s');
    }
    public static function setVar ($val) {
        self::$var = $val;
    }
    private static function getVar () {
        return self::$var;
    }
    
}