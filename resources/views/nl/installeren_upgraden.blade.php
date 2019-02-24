@extends('master')
@section('head')
    <title>Ubuntu Fan - Upgraden</title>
@stop
@section('content')
<h1>Upgraden</h1>

<p>Als u Ubuntu al heeft geïnstalleerd kunt u ook simpelweg upgraden vanuit uw huidige versie.</p>

<p><b>Let op!</b> <i>Maak ook bij een upgrade altijd een backup van uw bestanden!</i></p>

<h6>Laten we beginnen!</h6>

<p>Als u upgrade vanuit een tussenversie (bijvoorbeeld 15.10), volg dan deze stappen:</p>

<ul>
	<li>Open de Update Manager en installeer eerst alle updates.</li>
    <li>Vervolgens verschijnt een melding, Ubuntu versie 16.04 is beschikbaar, klik op upgraden.</li>
    <li>Accepteer de voorwaarde.</li>
    <li>Wacht tot alles gedownload en geïnstalleerd is.</li>
    <li>Herstart de computer en u heeft de niewste versie!</li>
</ul>

<p>Als u upgrade vanuit versie 14.04, kunt u voor juli 2016 niet op bovenstaande manier upgraden, volg daarom deze stappen:</p>

<ul>
	<li>Open de Update Manager en installeer eerst alle updates.</li>
    <li>Open vervolgens een terminalvenster.</li>
    <li>Vul het volgende in en druk op enter: sudo update-manager -d</li>
    <li>Voer uw wachtwoord in.</li>
    <li>Een pop-up komt met de vraag of u wilt upgraden, klik op ja.</li>
    <li>Wacht tot alles gedownload en geïnstalleerd is.</li>
    <li>Herstart de computer en u heeft de niewste versie!</li>
</ul>

<p>Upgrade u vanuit een andere versie? Herhaal de bovenste stappenlijst dan, totdat u uiteindelijk bij versie 16.04 uitkomt. Ubuntu kan maar per versie (of LTS versie) upgraden.</p>

<br><br>
<img src="../images/upgraden_trusty_naar_xenial.jpg" alt="Upgraden" /><br />
<p style="font-size:9px; text-align:center; padding:0px; margin:0px;">
    Afbeelding van <a href="http://www.omgubuntu.co.uk" target="_blank">omgubuntu.co.uk</a>
</p>

@stop