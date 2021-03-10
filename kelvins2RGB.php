function kelvins2RGB($temp) {
	$temp = $temp / 100;
	if ($temp < 66) {
		$red = 255;
		$green = max(min(round(99.4708025861 * log($temp) - 161.1195681661), 255), 0);
		$blue = $temp <= 19 ? 0 : max(min(round(138.5177312231 * log($temp - 10) - 305.0447927307), 255), 0);
	} else {
		$red = max(min(round(329.698727446 * (($temp - 60) ^ -0.1332047592)), 255), 0);
		$green = max(min(round(288.1221695283 * (($temp - 60) ^ -0.0755148492)), 255), 0);
		$blue = 255;
	}
	return array(red=>$red, green=>$green, blue=>$blue, hex=>sprintf("#%02x%02x%02x", $red, $green, $blue));
}
