<?php
App::uses('CroogoTestCase', 'Croogo.TestSuite');

class CroogoBehaviorsTest extends PHPUnit_Framework_TestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('Croogo behavior tests');
		$path = APP . 'Test' . DS . 'Case' . DS . 'Model' . DS . 'Behavior' . DS;
		$suite->addTestDirectory($path);
		return $suite;
	}

}
