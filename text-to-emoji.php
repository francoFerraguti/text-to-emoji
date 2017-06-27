<?php

text_to_emoji($_GET["text"]);

function text_to_emoji($text){
	$text = strtolower($text);

	while ($text != ""){
		$n_letters_to_grab = (strlen($text) >= 4) ? 4 : strlen($text);
		$translation_found = false;

		while (!$translation_found){
			$letters_to_translate = substr($text, 0, $n_letters_to_grab);
			$translation = translate_to_emoji($letters_to_translate);

			if ($translation != ""){
				$translation_found = true;
				$text = substr($text, $n_letters_to_grab);
				echo $translation;
			} else {
				$n_letters_to_grab--;
			}
		}
	}
}

function translate_to_emoji($subtext){
	switch($subtext){
		case ' ':
			return '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		case 'a':
			return "🅰";
		case 'b':
			return "🅱";
		case 'c':
			return "©";
		case 'd':
			return "🌛";
		case 'e':
			return "📧";
		case 'f':
			return "☦";
		case 'g':
			return "🌀";
		case 'h':
			return "♓";
		case 'i':
			return "ℹ";
		case 'j':
			return "🏑";
		case 'k':
			return "♓";
		case 'l':
			return "🛴";
		case 'm':
			return "Ⓜ";
		case 'n':
			return "♑";
		case 'ñ':
			return "♑";
		case 'o':
			return "🅾";
		case 'p':
			return "🅿";
		case 'q':
			return "👁‍🗨";
		case 'r':
			return "®";
		case 's':
			return "💲";
		case 't':
			return "✝";
		case 'u':
			return "⛎";
		case 'v':
			return "♈";
		case 'w':
			return "🔱";
		case 'x':
			return "❌";
		case 'y':
			return "✌🏻";
		case 'z':
			return "💤";
		case '0':
			return "0⃣";
		case '1':
			return "1⃣";
		case '2':
			return "2⃣";
		case '3':
			return "3⃣";
		case '4':
			return "4⃣";
		case '5':
			return "5⃣";
		case '6':
			return "6⃣";
		case '7':
			return "7⃣";
		case '8':
			return "8⃣";
		case '9':
			return "9⃣";
		case '10':
			return "🔟";
		case '?':
			return "❓";
		case '!':
			return "❗";
		case 'id':
			return "🆔";
		case 'vs':
			return "🆚";
		case 'ab':
			return "🆎";
		case 'cl':
			return "🆑";
		case 'ng':
			return "🆖";
		case 'ok':
			return "🆗";
		case 'up':
			return "🆙";
		case 'wc':
			return "🚾";
		case 'abc':
			return "🔤";
		case 'sos':
			return "🆘";
		case 'new':
			return "🆕";
		case 'atm':
			return "🏧";
		case 'free':
			return "🆓";
		case 'cool':
			return "🆒";
		case 'off':
			return "📴";
		case 'tm':
			return "™";
		case 'end':
			return "🔚";
		case 'back':
			return "🔙";
		case 'on':
			return "🔛";
		case 'top':
			return "🔝";
		case 'soon':
			return "🔜";
		case '100':
			return "💯";
		case '.':
			return "▪";

		default:
			return (strlen($subtext) > 1) ? "" : "〰";
	}
}

?>