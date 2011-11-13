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
				'�irnio dyd�io', 'stiklin�s dyd�io', '�mogaus �gio', 'ypa� lengvas' );
			$aAdj1 = array(
				'nesenstantis', 'nedegantis', '� visas puses lankstomas', 'lipnus',
				'ned��tantis', 'labai birus', 'mink�tas', 'permatomas',
				'nepastebimas', 'lengvai supakuojamas', 'greitai b�gantis', 'greitai valgomas',
				'gerai atrodantis', 'kartais veikiantis', 'beveik tobulas', 'beveik geras' );
			$aWhat1 = array(
				'�aldytuvas', 'segtuvas', 'variklis', 'skystis',
				'stalas', 'prietaisas', 'ratas', '�v�ris',
				'mai�ytuvas', '�viestuvas', 'pie�tukas', 'radijas',
				'veidrodis', 'dviratis', 'kuras', 'augalas' );
			// ---------------------------------------------------------------------------------------------------
			$aFill2_1 = array( ', kuris', '; jis', ', ta�iau jis', ', taip pat jis', );
				$a2_1_b = array(
					'lengvesnis u�', 'pana�us �', 'lengvai telpa �', 'gali valgyti',
					'gali pakelti', 'm�gsta', 'daug didesnis u�' );
				$a2_1_c = array(
					'bet kok�', 'kiekvien�', 'bet kur�', 'pirm� pasitaikius�',
					'pat� geriausi�', 'pigiausi�', 'brangiausi�', 'pat� populiariausi�' );
				$a2_1_d = array(
					'skraidant�', 'permatom�', 'prip�st� oro', 'plaukiojant�',
					'niekad nesugendant�', 'visada �vie�i�', '�okin�jant�', 'nepagaunam�' );
				$a2_1_e = array(
					'tank�', 'aparat�', 'i�misl�', 'skyst�',
					'rei�kin�', 'gyv�n�', 'organizm�', 'maisto produkt�',
					'vaik� dar�el�', 'universitet�', 'miest�', 'valdinink�',
					'pardav�j�', 'dailinink�', 'muzikos centr�', 'automobil�' );
			// ---------------------------------------------------------------------------------------------------
			$a3_1 = array( 'Jo ne�manoma', 'J� labai sunku', 'Jo negalima', 'J� patartina' );
				$a3_1_a = array(
					'pagauti', 'vartoti', 'surasti', 'nusiimti',
					'saugoti', 'gird�ti', 'u�uosti', 'teisingai naudoti' );
				$a3_1_b = array(
					'tik suaugusiems', 'net ir vaikams', 'plikomis rankomis', 'tik perskai�ius instrukcijas',
					'tik gavus leidim�', 'be kvalifikuoto personalo', 'viena ranka', 'kartu su sviestu',
					'be specialaus apmokymo', 'su pir�tin�mis', 'spintoje', 'tamsoje',
					'gryname ore', 'v�sioje vietoje', 'netoli buitini� prietais�', 'tre�iadieniais' );
			// ---------------------------------------------------------------------------------------------------
			$a4_1 = array( 'Jis �simena', 'Jis atpa��sta', 'Jis supranta', 'Jis moka' );
				$a4_1_a = array(
					'visas', 'bet kokias', 'lengvai �simenamas', 'sunkiai suvokiamas',
					'ypa� slaptas', 'pa�ias keis�iausias', 'visas juokingas', 'beveik visas logi�kas' );
				$a4_1_b = array(
					'instrukcijas', 'komandas', 'moteris', 'knygas',
					'dujines virykles', 'boru��les', 'spalvas', 'spalvas ir net atspalvius',
					'televizijos laidas', 'i�girstas frazes', 'matytas avis', 'arbatos r��is',
					'laikra��i� antra�tes', 'Interneto svetaines', 'aus� formas', 'savait�s dienas' );
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

<form class="form" method="get">Kas gal�t� b�ti...<br>
<input class="inform" type="text" name="v"> <input class="inform" type="submit" value="?"></form>
</div>

<div class="footer">
2003-2007, Aras Pranckevi�ius aka NeARAZ<br>
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