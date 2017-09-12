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
		$this->assertEquals($expectedresult, $result); 
	}
} 