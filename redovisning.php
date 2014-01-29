<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexted";
$data['meta_description'] = "Alla redovisningstexter samlade p� en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<p>H�r skriver du all din redovisningstext, kursmoment f�r kursmoment och avslutar med projektet.</p>

<h2>Kmom01: En boilerplate</h2>
<p>Redovisningstext enligt instruktionen...</p>

<h2>Kmom02: Grunden till ett MVC ramverk</h2>
<p>Redovisningstext enligt instruktionen...</p>

<p>och s� vidare...</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
