<?php
App::uses('CroogoTestCase', 'Croogo.TestSuite');

class CroogoComponentsTest extends PHPUnit_Framework_TestSuite {

/**
 * suite
 */
	public static function suite() {
		$suite = new CakeTestSuite('Croogo components tests');
		$path = APP . 'Test' . DS . 'Case' . DS . 'Controller' . DS . 'Component' . DS;
		$suite->addTestDirectory($path);
		return $suite;
	}

}
