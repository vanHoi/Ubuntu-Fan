@extends('master')
@section('head')
    <title>Ubuntu Fan - Opstartbare USB stick maken</title>
@stop
@section('content')
    <h1>Installatiemedium</h1>

    <p>Nu het bestand is gedownload, moeten we een opstartbare USB-stick maken.<br>
        De volgende stappen zijn algemeen, u kunt door de stappen te volgen bijvoorbeeld ook opstartbare USB-sticks met andere Linux distributies maken, zelfs een Windows
        installatie kunt u zo op een USB stick zetten.<br>
        Om een USB stick opstartbaar te maken, gebruiken we een programma genaamd 'Rufus', deze kunt u <a
                href="https://rufus.akeo.ie/"
                target="_blank">hier downloaden</a>.</p>

    <p>
        <b>Let op!</b>
    </ br>
    <i>Zorg dat alle bestanden op de USB stick weg kunnen, of dat u er een backup van heeft. De USB stick wordt namelijk
        volledig gewist! Verder moet de USB stick voor Ubuntu minimaal 2GB groot zijn.</i></p>

    <h6>Dan kunnen we nu beginnen!</h6>

    <a class="fancybox" href="/images/nl/installatiemedium/1.png" data-fancybox-group="gallery thumb button"
       title="Open het programma en selecteer uw USB stick. Controleer via de verkenner of het de juiste USB-stick is!">
        <img src="/images/nl/installatiemedium/1.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Open het programma en selecteer uw USB stick. Controleer via de verkenner of het de juiste USB-stick is!</p><br/>

    <a class="fancybox" href="/images/nl/installatiemedium/2.png" data-fancybox-group="gallery thumb button"
       title="Klik op het icoontje met een CD, en selecteer uw Ubuntu ISO bestand.">
        <img src="/images/nl/installatiemedium/2.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Klik op het icoontje met een CD, en selecteer uw ISO bestand. In ons geval Ubuntu 16.04.</p><br/>

    <a class="fancybox" href="/images/nl/installatiemedium/3.png" data-fancybox-group="gallery thumb button"
       title="De instellingen worden automatisch goed gezet, druk op Start.">
        <img src="/images/nl/installatiemedium/3.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>De instellingen worden automatisch goed gezet, druk op Start.</p><br/>

    <a class="fancybox" href="/images/nl/installatiemedium/4.png" data-fancybox-group="gallery thumb button"
       title="Selecteer 'Schrijf in ISO' modus en druk op OK.">
        <img src="/images/nl/installatiemedium/4.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Selecteer 'Schrijf in ISO modus' en druk op OK.</p><br/>

    <a class="fancybox" href="/images/nl/installatiemedium/5.png" data-fancybox-group="gallery thumb button"
       title="Bestig dat de USB stick mag worden gewist door op OK te klikken.">
        <img src="/images/nl/installatiemedium/5.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Bestig dat de USB stick mag worden gewist door op OK te klikken.</p><br/>

    <a class="fancybox" href="/images/nl/installatiemedium/6.png" data-fancybox-group="gallery thumb button"
       title="Het programma gaat aan de gang, heb ongeveer vijf minuten geduld!">
        <img src="/images/nl/installatiemedium/6.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Het programma gaat aan de gang, heb ongeveer vijf minuten geduld!</p><br/>

    <a class="fancybox" href="/images/nl/installatiemedium/7.png" data-fancybox-group="gallery thumb button"
       title="Als het programma klaar is, is de balk volledig groen en staat er GEREED.">
        <img src="/images/nl/installatiemedium/7.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Als het programma klaar is, is de balk volledig groen en staat er GEREED.</p>

    <br/>

    <p>Dan kunnen we de computer nu <a href="/installeren/opstarten">gaan opstarten vanaf de USB stick</a>.</p>

    @include('includes.loadfancybox')

@stop