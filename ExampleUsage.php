<?php
require_once('WitchSaga.php');
class ExampleUsage{
    public function index(){
        $witchSaga = new WitchSaga();
        $result = $witchSaga->index(
            array('ageOfDeath' => 10, 'yearOfDeath' => 15),
            array('ageOfDeath' => 13, 'yearOfDeath' => 19)
        );
        return $result;
    }
}
$test = new ExampleUsage();
$result = $test->index();
echo $result;


