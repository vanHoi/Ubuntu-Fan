@extends('master')
@section('head')
    <title>Ubuntu Fan - Software</title>
@stop
@section('content')
    <h1>Extra Software</h1>

    <p>Zoekt u meer software voor uw PC, die u wel onder Windows had maar op Ubuntu niet aan de praat krijgt? Hieronder
        heb
        ik een lijstje samengesteld van veelgebruikte programma's die standaard helaas niet te downloaden zijn via het
        softwarecentrum!</p>

    <img src="/images/wine.png" class="right" style="width: auto;" height="200" alt="Wine HQ Logo"/>
    <h6>Window's programma's</h6>
    <p class="clearfix">Window's programma's, bestanden die eindigen op '.exe' werken standaard niet onder Ubuntu. Gelukkig is er
        software
        waarmee veel programma's toch werken. Deze software heet Wine, en wordt gemaakt, onderhouden en constant
        verbeterd
        door honderden vrijwilligers. Deze software is wel gewoon gratis te downloaden via het softwarecentrum. Let wel
        dat deze software niet alle programma's vlekkeloos draait, voor een lijst met bekende programma's en of ze
        werken of
        niet kunt u <a href="https://appdb.winehq.org/" target="_blank">hier kijken</a>.<br/>
        Nadat u Wine heeft geïnstalleerd kunt u met de rechtermuisknop op het .exe bestand klikken, en vervolgens op
        openen
        met Wine. Met een beetje geluk werkt het programma dan wel!</p>

    <img src="/images/spotify.png" class="left" height="150" alt="Spotify Logo"/>
    <h6>Spotify</h6>
    <p class="clearfix">
        Spotify kan tegenwoordig gewoon gevonden worden in het softwarecentrum. Zo installeert je het makkelijk en wordt
        het voortaan automatisch geupdatet!
    </p>

    <h6>Steam</h6>
    <p class="clearfix">
        Als je wel eens games speelt heb je vast ook gehoord van Steam, of misschien zelfs wel SteamOS, wat een Linux
        distributie is! Om Steam de eerste keer te starten moet je naar
        <a href="http://store.steampowered.com/about/" target="_blank">de website van Steam gaan</a> en
        daar het installatiebestand downloaden. Klik erop, en installeer het via het softwarecentrum. Als je vervolgens
        Steam uitvoert downloadt het programma zelf de rest van de benodigdheden, en updaten gaat voortaan ook
        automatisch!
    </p>

    <img src="/images/chrome.png" class="right" height="150" alt="Google Chrome Logo"/>
    <h6>Google Chrome</h6>
    <p class="clearfix">
        Een alternatieve browser voor Firefox, gemaakt door Google. U kunt het
        <a href="https://www.google.com/chrome/browser/desktop/index.html">hier downloaden</a>, selecteer het .deb
        formaat voor Ubuntu.
    </p>

    <h6>Google Earth</h6>
    <p class="clearfix">
        Bekijk de hele wereld, de maan en de planeet Mars vanuit je luie stoel!
        <a href="https://www.google.nl/earth/download/ge/agree.html">Hier te downloaden.</a><br/>
        Zo te installeren: Open de map waar u het bestand naar toe gedownload heeft. Klik met de rechtermuisknop op
        GoogleEarthLinux.bin. Kies voor 'Met andere toepassing openen...'. Druk op het pijlte bij 'Gebruik een
        aangepaste
        opdracht'. Typ 'sh' en druk op 'OK'. Tip: Gebruik 'gksudo sh' in plaats van 'sh' om Google Earth voor meerdere
        gebruikers te installeren.
    </p>

    <h6>Tips zijn welkom!</h6>
    <p class="clearfix">
        Mis je nog software, of weet je zelf nog een handig programma? Zet een reactie in het
        <a href="/gastenboek">gastenboek!</a><br>
        Ook kun je eens in deze
        <a href="https://flathub.org/home" target="_blank">Flathub store</a> kijken (Engels).
    </p>
@stop
