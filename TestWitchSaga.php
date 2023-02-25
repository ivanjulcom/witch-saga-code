<?php
require_once('WitchSaga.php');

class TestWitchSaga{

    public function testKillEveryYear($expectedResult, $personA, $personB) {
        // Test with age of death and year of death
        $witchSaga = new WitchSaga();
        $result = $witchSaga->index($personA, $personB);
        if ($result !== $expectedResult) {
            echo "Test failed: Expected $expectedResult but got $result\n";
        }
    }
}
$test = new TestWitchsaga();
$expectedResult = 16;
$personA = array('ageOfDeath' => 10, 'yearOfDeath' => 15);
$personB = array('ageOfDeath' => 13, 'yearOfDeath' => 19);
$result = $test->testKillEveryYear($expectedResult, $personA, $personB);
echo $result;