<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 18.12.17
 * Time: 20:30
 */

class Operations
{
    private $operators = ['+', '-', '/', '*'];
    private $operand1;
    private $operand2;
    private $operator;
    private $operations = [];
    private $resultats;
    
    private function constructOperation()
    {
        $this->operand1 = rand(1, 10);
        $this->operand2 = rand(1, 10);
        $this->operator = $this->operators[array_rand($this->operators, 1)];
        
        return $this->operand1 . ' ' . $this->operator . ' ' . $this->operand2 . ' = ' . $this->resultats;
    }
    
    public function genererOperations($quantite)
    {
        if (is_int($quantite)) {
            for ($i = 0; $i < $quantite; $i++) {
                $this->operations[$i] = $this->constructOperation();
                
            }
        } else {
            die("il ya erreur sur le nombre d\'opérations fourni !");}
    }
    
    public function getOperations()
    {
        return $this->operations;
    }
    /*
    private function ajouterAddition()
    {
    
    }
    
    private function ajouterSoustraction()
    {
    
    }
    
    private function ajouterMultiplication()
    {
    
    }
    
    private function ajouterDivision()
    {
    
    } */
}