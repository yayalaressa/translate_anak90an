<?php

function translate($match) {
        $e = ctype_upper($match[0]) ? 'D' : 'd';
	return str_replace($match[0], $match[0] . $e . $match[0], $match[0]);
}

$kata = "aku suka makan nasi goreng"; // text yang ingin diubah
$result = preg_replace_callback('/(a|i|u|e|o|A|I|U|E|O)/i', 'translate', $kata);

print($result); // output: adakudu sudukada madakadan nadasidi godoredeng
