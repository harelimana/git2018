<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 19.12.17
 * Time: 00:02
 */
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__DIR__.'/Operations.php');

class OperationSolver
{
    public static $resultats = [];
    private static $foo = [];
    private static $resultat = 0;
    
    public static function solve($tableau)
    {
        self::$foo = array_map(function($equation) {
            
            $op = $equation[2];

            switch ($op){
                case '+': self::$resultat = $equation[0] + $equation[4];break;
                case '-': self::$resultat = $equation[0] - $equation[4];break;
                case '*': self::$resultat = $equation[0] * $equation[4];break;
                case '/': self::$resultat = $equation[0] / $equation[4];break;
            }
            
            return (self::$resultats[$equation] = self::$resultat);
        }, $tableau);
        
        return self::$resultats;
    }
    
}