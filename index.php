<!-- На вход подается строка из чисел, разделенных пробелами.

Найдите все числа, встречающиеся 2 и более раз. Выведите их в любом порядке, разделяя пробелами. -->

<?php
function dublicateValues ($strDublicate) {
	$strArr = explode(" ", $strDublicate);
	$arrDublicate = [];
	$returnDublicate = [];

	foreach ($strArr as $keyThis => $thisValue) {
		foreach ($strArr as $keyCompare => $compareValue){
			if (($keyThis === 0 && $keyCompare === 0) || ($keyThis === $keyCompare)) {
				continue;
			}
			if ($thisValue === $compareValue) {
				$arrDublicate[$thisValue] = 1;
			}
}
}

	foreach ($arrDublicate as $key => $value) {
		$returnDublicate[] = $key;
	}
	return implode (" ", $returnDublicate);
}
echo dublicateValues("3 2 5 2 1 3");
?>