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
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<a href="http://www.flickr.com/photos/mikaelroos/tags/me/">
<figure class="right top">
{$mosImage}
</figure>
</a>

<p>Mitt namn är Mikael Roos och jag är ansvarig för denna kursen, phpmvc, och kursklustret som jag valt att
kalla för dbwebb.</p>
<p>Jag jobbar sedan 2006 på Blekinge Tekniska Högskola. Jag jobbade även här ett par år i mitten av 90-talet (92-95).
Det var strax efter jag slutfört mina studier vid programmet Programvaruteknik (PT). Även det vid BTH.
Mellan -95 och 2006 jobbade med programutveckling "ute i näringslivet".
Jag har testat positioner såsom utvecklare, projektledare, produktledare,
avdelningschef, produktchef, egen företagare, vd och styrelseledamot.
Jobben har alltid rört programutveckling och utveckling av mjukvaror.</p>
<p>2005 bestämde jag mig för att avsluta min management-inriktade karriär och återgå till tekniken.
På något sätt hamnade jag då vid BTH och där sitter vi nu.</p>

<p>Jag jobbar numer full tid som lärare
på dessa distanskurser och dess campus-varianter. Jag är även programansvarig för kandidatprogrammet "Webbprogrammering".
Eftersom jag skapat både programmet och dbwebb kurserna så hoppas jag att jag får jobba med dessa de närmaste åren.
Det skall bli kul att fortsätta utveckla kurser inom denna nish. Det finns mycket kvar att göra och det händer saker hela tiden.</p>
<p>Jag bor i Ronneby sedan 1990 med familj. Jag är dock smålänning och kommer från Bankeryd. Hejar på HV71
och spelar bowling på fritiden. När jag får tid över så jobbar jag med PHP och MySQL i mina opensource projekt.
Eller så gräver jag sten i sommarstugan. Eller så sysslar mer projekt och uppdrag på min egna firma. Det finns alltid att göra.</p>
<p>Förra året hade jag ett nyårslöfte om att spela poker. Det gick sådär.
Jag läste massa böcker, men det hjälpte bara delvis... 
Min nya hobby är att bli en geocachare (<a href="http://www.geocaching.org">www.geocaching.org</a>), det har jag fastnat för, en kul sysselsättning :).
</p>
  
{$mosByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
