<?php

namespace stats;

class Baseball{
	public function calc_avg($ab, $hits){
		if ($ab == 0){
			$avg = "0.000";
		} else {
			error_log($hits/$ab);
			$avg = number_format($hits/$ab, 3);
		}
		return $avg;
	}

	public function calc_obp($ab, $bb, $hp, $sac, $hits){
		if (!($total = $ab + $bb + $hp + $sac)){
			$obp = "0.000";
		} else {
			$obp = number_format(($hits + $bb + $hp + $sac) / $ab, 3);
		}
		return $obp;
	}
	public function calc_slg($ab, $singles, $doubles, $tripples, $hr){
		if ($ab == 0){
			$slg = "0.000";
		} else {
			$slg = number_format((($singles*1)+($doubles*2)+($tripples*3))/$ab, 3);
		}
		return $slg;
	}

	public function calc_ops($ab, $singles, $doubles, $tripples, $hr){
		$slg = number_format((($singles*1)+($doubles*2)+($tripples*3))/$ab, 3);
		$obp = number_format(($hits + $bb + $hp + $sac) / $ab, 3);
		$ops = $slg + $obp;
		return $ops; 
	}
}