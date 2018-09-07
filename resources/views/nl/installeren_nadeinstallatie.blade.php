@extends('master')
@section('head')
    <title>Ubuntu Fan - Na de Installatie</title>
@stop
@section('content')
    <h1>Na de installatie</h1>

    <p>Deze stappen kunt u het beste meteen na de installatie uitvoeren. Soms moet u uw wachtwoord invoeren, dit
        hoort.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/1.png" data-fancybox-group="gallery thumb button"
       title="Updaten: Open de dash en typ 'updatebeheer'.">
        <img src="/images/nl/nadeinstallatie/1.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Updaten, dit klinkt misschien raar, maar het is echt zo. Nadat het ISO bestand is gemaakt zijn er nog belangrijke
        updates uitgekomen.<br/>
        Start daarom de dash, door op het Ubuntu logo linksbovenin te klikken, en type 'updatebeheer'. Druk vervolgens
        op ENTER.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/2.png" data-fancybox-group="gallery thumb button"
       title="Installeer de updates en herstart uw computer indien nodig.">
        <img src="/images/nl/nadeinstallatie/2.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Installeer vervolgens de updates (u moet uw wachtwoord invullen) en heb even geduld, herstart erna indien nodig
        uw computer.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/3.png" data-fancybox-group="gallery thumb button"
       title="Start vervolgens het Software Centrum.">
        <img src="/images/nl/nadeinstallatie/3.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Start vervolgens het Software Centrum.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/4.png" data-fancybox-group="gallery thumb button"
       title="Selecteer boven het tablad Updates, en klik vervolgens op Installeren.">
        <img src="/images/nl/nadeinstallatie/4.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Selecteer boven het tablad Updates, en klik vervolgens op Installeren.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/5.png" data-fancybox-group="gallery thumb button"
       title="Installeren voltooid!">
        <img src="/images/nl/nadeinstallatie/5.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Installeren voltooid! U kunt eventueel nog wat leuke programma's uitzoeken en installeren, of het venster
        sluiten.</p><br/>

    @include('includes.ad')

    <a class="fancybox" href="/images/nl/nadeinstallatie/6.png" data-fancybox-group="gallery thumb button"
       title="Verwijder icoontjes door er met rechts op te klikken.">
        <img src="/images/nl/nadeinstallatie/6.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Verwijder het Amazon icoon (en eventueel andere). Doe dit door op het icoon te gaan staan met de muis, met rechts
        te klikken en vervolgens op Uit Starter verwijderen.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/7.png" data-fancybox-group="gallery thumb button"
       title="Start het instellingen menu.">
        <img src="/images/nl/nadeinstallatie/7.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Start het instellingen menu.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/8.png" data-fancybox-group="gallery thumb button"
       title="Klik vervolgens op taalondersteuning, klik in het venster wat vervolgens opent op Installeren.">
        <img src="/images/nl/nadeinstallatie/8.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Klik vervolgens op taalondersteuning, klik in het venster wat vervolgens opent op Installeren.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/9.png" data-fancybox-group="gallery thumb button"
       title="Vervolgens zullen alle missende taalpakketten worden gedownload en geïnstalleerd.">
        <img src="/images/nl/nadeinstallatie/9.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Vervolgens zullen alle missende taalpakketten worden gedownload en geïnstalleerd.</p><br/>

    @include('includes.ad')

    <a class="fancybox" href="/images/nl/nadeinstallatie/10.png" data-fancybox-group="gallery thumb button"
       title="Nu gaan we eventueel missen drivers installeren, typ hiervoor 'extra stuurprogrammas' in de dash en druk op enter.">
        <img src="/images/nl/nadeinstallatie/10.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Nu gaan we eventueel missende drivers installeren, typ hiervoor 'extra stuurprogrammas' in de dash en druk op
        enter.</p><br/>

    <a class="fancybox" href="/images/nl/nadeinstallatie/11.png" data-fancybox-group="gallery thumb button"
       title="titel">
        <img src="/images/nl/nadeinstallatie/11.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Na even laden opent het volgend scherm, de NVIDIA of AMD drivers zijn over het algemeen een stuk beter dan de
        X.Org drivers. Selecteer daarom de nieuwste NVIDIA of AMD driver, en klik op Wijzigingen doorvoeren.</p><br/>

    <p>Nu hebt u alle belangrijke dingen na de installatie gedaan. Wilt u nog wat tips voor leuke programma's, of bent u
        een gebruiker van Spotify. Vergeet dan niet eens <a href="/software">hier te kijken naar aanvullende
            software</a>.</p>

    @include('includes.loadfancybox')

@stop