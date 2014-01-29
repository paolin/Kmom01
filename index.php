<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$mosImage   = file_get_contents(__DIR__."/incl/mos_as_small_image.html");
$mosByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad f�r kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig sj�lv</h1>

<a href="http://www.flickr.com/photos/mikaelroos/tags/me/">
<figure class="right top">
{$mosImage}
</figure>
</a>

<p>Mitt namn �r Mikael Roos och jag �r ansvarig f�r denna kursen, phpmvc, och kursklustret som jag valt att
kalla f�r dbwebb.</p>
<p>Jag jobbar sedan 2006 p� Blekinge Tekniska H�gskola. Jag jobbade �ven h�r ett par �r i mitten av 90-talet (92-95).
Det var strax efter jag slutf�rt mina studier vid programmet Programvaruteknik (PT). �ven det vid BTH.
Mellan -95 och 2006 jobbade med programutveckling "ute i n�ringslivet".
Jag har testat positioner s�som utvecklare, projektledare, produktledare,
avdelningschef, produktchef, egen f�retagare, vd och styrelseledamot.
Jobben har alltid r�rt programutveckling och utveckling av mjukvaror.</p>
<p>2005 best�mde jag mig f�r att avsluta min management-inriktade karri�r och �terg� till tekniken.
P� n�got s�tt hamnade jag d� vid BTH och d�r sitter vi nu.</p>

<p>Jag jobbar numer full tid som l�rare
p� dessa distanskurser och dess campus-varianter. Jag �r �ven programansvarig f�r kandidatprogrammet "Webbprogrammering".
Eftersom jag skapat b�de programmet och dbwebb kurserna s� hoppas jag att jag f�r jobba med dessa de n�rmaste �ren.
Det skall bli kul att forts�tta utveckla kurser inom denna nish. Det finns mycket kvar att g�ra och det h�nder saker hela tiden.</p>
<p>Jag bor i Ronneby sedan 1990 med familj. Jag �r dock sm�l�nning och kommer fr�n Bankeryd. Hejar p� HV71
och spelar bowling p� fritiden. N�r jag f�r tid �ver s� jobbar jag med PHP och MySQL i mina opensource projekt.
Eller s� gr�ver jag sten i sommarstugan. Eller s� sysslar mer projekt och uppdrag p� min egna firma. Det finns alltid att g�ra.</p>
<p>F�rra �ret hade jag ett ny�rsl�fte om att spela poker. Det gick s�d�r.
Jag l�ste massa b�cker, men det hj�lpte bara delvis... 
Min nya hobby �r att bli en geocachare (<a href="http://www.geocaching.org">www.geocaching.org</a>), det har jag fastnat f�r, en kul syssels�ttning :).
</p>
  
{$mosByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
