<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 18.12.17
 * Time: 20:31
 */
define('__ROOT__', dirname(dirname(__FILE__)));

require_once (__DIR__.'/Operations.php');
require_once (__DIR__.'/OperationSolver.php');

$generator = new Operations();
$generator->genererOperations(12);
$operations = $generator->getOperations();
$res = (OperationSolver::solve($operations));

// ligne de décoration

echo "<br />" . "<hr>";
echo "Operations generees" . "<hr>";

// affichage des opérations

foreach ($operations as $operation) {
    echo $operation . $res[$operation] . "<br />";
}

echo "<br />" . "<hr>";
var_dump(OperationSolver::solve($operations));