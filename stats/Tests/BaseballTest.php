<?php 
namespace stats\Tests;

require_once __DIR__."/../Baseball.php";

use stats\Baseball;
use PHPUnit\Framework\TestCase;

class BaseballTest extends TestCase{
	public function testCalcAvgEquals(){
		$atbats = 389;
		$hits = 129;
		$baseball = new Baseball();
		$result = $baseball->calc_avg($atbats, $hits);
		$expectedresult = $hits/$atbats;
		
		$formatedexpectedresult = number_format($hits/$atbats, 3);
		$this->assertEquals($formatedexpectedresult, $result);
	}
	public function testCalcHitsAreStrings(){
		$atbats = 389;
		$hits = "wedad";
		$baseball = new Baseball();
		$result = $baseball->calc_avg($atbats, $hits);
		$formatedexpectedresult = 0.000;
		$this->assertEquals($formatedexpectedresult, $result);
	}
} 