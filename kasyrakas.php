<HTML>
<HEAD>
	<META content="text/html; charset=windows-1257" http-equiv="Content-Type">
	<TITLE>Kas Yra Kas Lietuvoje?</TITLE>
	<LINK href="kasyrakas.css" rel=stylesheet type="text/css">
</HEAD>
<body>

<div class="title">Kas Yra Kas Lietuvoje? <div class="ver">v1.0.7 (2007 07 29)</div></div>
<div class="background">
<?php
	if( isset( $_GET["v"] ) ) {
		$p = trim( $_GET["v"] );
		if( strlen($p) > 0 ) {
			$aFill1 = array( 'tai', 'yra', '- tai', '- tai' );
			$aAdj0 = array(
				'žirnio dydžio', 'stiklinės dydžio', 'žmogaus ūgio', 'ypač lengvas' );
			$aAdj1 = array(
				'nesenstantis', 'nedegantis', 'į visas puses lankstomas', 'lipnus',
				'nedūžtantis', 'labai birus', 'minkštas', 'permatomas',
				'nepastebimas', 'lengvai supakuojamas', 'greitai bėgantis', 'greitai valgomas',
				'gerai atrodantis', 'kartais veikiantis', 'beveik tobulas', 'beveik geras' );
			$aWhat1 = array(
				'šaldytuvas', 'segtuvas', 'variklis', 'skystis',
				'stalas', 'prietaisas', 'ratas', 'žvėris',
				'maišytuvas', 'šviestuvas', 'pieštukas', 'radijas',
				'veidrodis', 'dviratis', 'kuras', 'augalas' );
			// ---------------------------------------------------------------------------------------------------
			$aFill2_1 = array( ', kuris', '; jis', ', tačiau jis', ', taip pat jis', );
				$a2_1_b = array(
					'lengvesnis už', 'panašus į', 'lengvai telpa į', 'gali valgyti',
					'gali pakelti', 'mėgsta', 'daug didesnis už' );
				$a2_1_c = array(
					'bet kokį', 'kiekvieną', 'bet kurį', 'pirmą pasitaikiusį',
					'patį geriausią', 'pigiausią', 'brangiausią', 'patį populiariausią' );
				$a2_1_d = array(
					'skraidantį', 'permatomą', 'pripūstą oro', 'plaukiojantį',
					'niekad nesugendantį', 'visada šviežią', 'šokinėjantį', 'nepagaunamą' );
				$a2_1_e = array(
					'tanką', 'aparatą', 'išmislą', 'skystį',
					'reiškinį', 'gyvūną', 'organizmą', 'maisto produktą',
					'vaikų darželį', 'universitetą', 'miestą', 'valdininką',
					'pardavėją', 'dailininką', 'muzikos centrą', 'automobilį' );
			// ---------------------------------------------------------------------------------------------------
			$a3_1 = array( 'Jo neįmanoma', 'Jį labai sunku', 'Jo negalima', 'Jį patartina' );
				$a3_1_a = array(
					'pagauti', 'vartoti', 'surasti', 'nusiimti',
					'saugoti', 'girdėti', 'užuosti', 'teisingai naudoti' );
				$a3_1_b = array(
					'tik suaugusiems', 'net ir vaikams', 'plikomis rankomis', 'tik perskaičius instrukcijas',
					'tik gavus leidimą', 'be kvalifikuoto personalo', 'viena ranka', 'kartu su sviestu',
					'be specialaus apmokymo', 'su pirštinėmis', 'spintoje', 'tamsoje',
					'gryname ore', 'vėsioje vietoje', 'netoli buitinių prietaisų', 'trečiadieniais' );
			// ---------------------------------------------------------------------------------------------------
			$a4_1 = array( 'Jis įsimena', 'Jis atpažįsta', 'Jis supranta', 'Jis moka' );
				$a4_1_a = array(
					'visas', 'bet kokias', 'lengvai įsimenamas', 'sunkiai suvokiamas',
					'ypač slaptas', 'pačias keisčiausias', 'visas juokingas', 'beveik visas logiškas' );
				$a4_1_b = array(
					'instrukcijas', 'komandas', 'moteris', 'knygas',
					'dujines virykles', 'boružėles', 'spalvas', 'spalvas ir net atspalvius',
					'televizijos laidas', 'išgirstas frazes', 'matytas avis', 'arbatos rūšis',
					'laikraščių antraštes', 'Interneto svetaines', 'ausų formas', 'savaitės dienas' );
			$aFillEnd = array( '!', '.', '!!!', '!' );
			
			$p = ucfirst($p);
			$phash = md5($p);
			$p = htmlspecialchars($p);
			print "<div class='subjtitle'><span class='subjtitle'>$p</span></div>";
			
			
			$r = "<span class='subj'>$p</span> ";
			$j = hexdec($phash{0});	$r .= $aFill1[ $j % count($aFill1) ]; $r .= ' ';
			$j = hexdec($phash{1});	if( $j >= 8 ) { $r .= $aAdj0[ ($j+3) % count($aAdj0) ]; $r .= ' '; };
			$j = hexdec($phash{2});	if( $j >= 8 ) { $r .= $aAdj1[ $j % count($aAdj1) ]; $r .= ' '; };
			$j = hexdec($phash{3});	$r .= $aWhat1[ $j % count($aWhat1) ];
			$j = hexdec($phash{4});	$r .= $aFill2_1[ $j % count($aFill2_1) ]; $r .= ' ';
			$j = hexdec($phash{5});	$r .= $a2_1_b[ $j % count($a2_1_b) ]; $r .= ' ';
			$j = hexdec($phash{6});	if( $j < 8 ) { $r .= $a2_1_c[ $j % count($a2_1_c) ]; $r .= ' '; };
			$j = hexdec($phash{7});	if( $j >= 8 ) { $r .= $a2_1_d[ $j % count($a2_1_d) ]; $r .= ' '; };
			$j = hexdec($phash{8});	$r .= $a2_1_e[ $j % count($a2_1_e) ];
			$j = hexdec($phash{9});	$r .= $aFillEnd[ $j % count($aFillEnd) ]; $r .= ' ';
			
			$j = hexdec($phash{10});	if( $j >= 8 ) {
				$j = hexdec($phash{11});	$r .= $a3_1[ $j % count($a3_1) ]; $r .= ' ';
				$j = hexdec($phash{12});	$r .= $a3_1_a[ $j % count($a3_1_a) ]; $r .= ' ';
				$j = hexdec($phash{13});	$r .= $a3_1_b[ $j % count($a3_1_b) ];
				$j = hexdec($phash{14});	$r .= $aFillEnd[ $j % count($aFillEnd) ]; $r .= ' ';
			} else {
				$j = hexdec($phash{11});	$r .= $a4_1[ $j % count($a4_1) ]; $r .= ' ';
				$j = hexdec($phash{12});	$r .= $a4_1_a[ $j % count($a4_1_a) ]; $r .= ' ';
				$j = hexdec($phash{13});	$r .= $a4_1_b[ $j % count($a4_1_b) ];
				$j = hexdec($phash{14});	$r .= $aFillEnd[ $j % count($aFillEnd) ]; $r .= ' ';
			}
			print $r."<br>";
		}
	}
?>

<form class="form" method="get">Kas galėtų būti...<br>
<input class="inform" type="text" name="v"> <input class="inform" type="submit" value="?"></form>
</div>

<div class="footer">
2003-2007, Aras Pranckevičius aka NeARAZ<br>
<a href="index.html">[www]</a> <a href="mailto:nearaz_at_gmail_dot_com">[email]</a>
<br>

<script language="javascript" type="text/javascript">
var _hey_lt_w = "", _hey_lt_h = "", _hey_lt_c = "";
</script>
<script language="javascript1.2" type="text/javascript">
_hey_lt_w = screen.width; _hey_lt_h = screen.height; _hey_lt_c = navigator.appName.indexOf("Microsoft") >= 0 ? screen.colorDepth : screen.pixelDepth;
</script>
<script language="javascript" type="text/javascript">
document.write("<a target='_blank' href='http://www.hey.lt/details.php?id=nearaz'><img width='88' height='31' border='0' src='http://www.hey.lt/count.php?id=nearaz&width=" + _hey_lt_w + "&height=" + _hey_lt_h + "&color=" + _hey_lt_c + "&referer=" + escape(document.referrer) + "' alt='Hey.lt web counter'></a>");
</script>
<noscript>
<a target="_blank" href="http://www.hey.lt/details.php?id=nearaz"><img width='88' height='31' border='0' src="http://www.hey.lt/count.php?id=nearaz" alt="Hey.lt web counter"></a>
</noscript>
<a href="http://www.nesnausk.org"><img src="img/nesnausk.png" title="nesnausk!" alt='nesnausk'></a>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-299873-1";
urchinTracker();
</script>

</div>

</body>
</html>