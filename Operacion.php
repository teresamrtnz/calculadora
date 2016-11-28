<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Operacion
 *
 * @author alumno
 */
class Operacion {
    //put your code here
    protected $op1;
    protected $op2;
    protected  $operacion;
    const RACIONAL = -1;
    const REAL = 1;
    
    
    
    static public function tipoOperacion ($cadena){
        $nRa = "[1-9][0-9]*\/[1-9][0-9]*"; //numRacional
        $op ="[+|-|*|:]";
        $nRe = "[1-9][0-9]*";//num Real
                
        $racional=<<<FIN
                /[$nRa $op $nRa]|
                 [$nRe $op $nRa]|
                 [$nRa $op $nRe]|
                 [$nRe : $nRe]/
FIN;
        
        if (preg_match( $racional,$cadena))
                
                return self::RACIONAL;
        else
            return self::REAL;
            
                
                
        
    }
    
    /**
     * 
     * @param string $cadena es operacion del tipo op1 operador op2
     * Este constructor saca los operadores y el operador de la operación
     */
    public function __construct($cadena){
        
        
        
        
    }
    
    
    
    
}
