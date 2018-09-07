@extends('master')
@section('head')
    <title>Ubuntu Fan - Opstarten vanaf een USB stick</title>
@stop
@section('content')
    <h1>Opstarten vanaf USB stick</h1>

    <p>We beginnen met de computer op te starten vanaf uw net gemaakte USB stick. Hiermee kunt u Ubuntu uitproberen
        zonder ook maar iets aan uw computer te verwijderen, of deze uiteraard gewoon installeren. Stop de USB stick in
        de computer, en haal alle andere eventuele USB sticks en harde schijven eruit. Start de computer vervolgens op.
        Als uw computer niet vanzelf vanaf de CD of uw USB stick opstart, kan het wat lastiger worden.<p>

        <img src="../images/bios.png" alt="Een BIOS chip" class="right" style="border-radius: 10px;"/>
    <p>Indien uw laptop is geleverd met Windows 8 of nieuwer, moet u eerst de BIOS starten. De BIOS is het meest lage
        niveau opslagmedium op uw computer, wat een aantal basisinstellingen van uw computers bevat. Hier moeten we de
        optie 'secureboot' gaan uitzetten. Eerst moet u weten hoe u in uw BIOS komt. Meestal staat dit direct aangegeven
        nadat u uw computer opstart. Vaak is het echter de 'DEL' toets, of 'F12'. Werkt dit niet, kijk dan in de
        handleiding van uw PC.<br/>
        De meeste BIOS'en werken uitsluitend met de pijltjes toetsen en ENTER. Zoek de optie secureboot door de pijltjes
        toetsen naar rechts te drukken, selecteer de optie, druk op ENTER en selecteer uit. Vervolgens moet u naar de
        'boot' instellingen. Hier moet u de optie USB-stick (of iets in die trand) op de eerste plek zetten waarvanaf
        gestart wordt. Ga vervolgens naar exit, en kies voor 'Save en Exit'.</p>

    <p>Na dit alles te hebben gedaan, kunt u de USB-stick in de computer steken, en kunnen we verder gaan met het
        starten! Als u alle instellingen in de BIOS goed heeft ingesteld, start de PC nu vanzelf op vanaf uw USB stick
        en krijgt u onderstaand scherm te zien.</p>

    <a class="fancybox" href="/images/nl/opstarten/1.jpg" data-fancybox-group="gallery thumb button"
       title="Als Ubuntu net start, verschijnt dit scherm. Druk op de spatiebalk.">
        <img src="/images/nl/opstarten/1.jpg" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Als Ubuntu net start, verschijnt dit scherm. Druk op de spatiebalk.</p><br/>

    <a class="fancybox" href="/images/nl/opstarten/2.jpg" data-fancybox-group="gallery thumb button"
       title="Kies vervolgens voor Nederlands.">
        <img src="/images/nl/opstarten/2.jpg" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Kies vervolgens voor Nederlands.</p><br/>

    <a class="fancybox" href="/images/nl/opstarten/3.jpg" data-fancybox-group="gallery thumb button"
       title="Kies 'cdrom op fouten controleren', ook al heeft u Ubuntu vanaf een USB-stick opgestart.">
        <img src="/images/nl/opstarten/3.jpg" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Kies 'cdrom op fouten controleren'. Ook al heeft u Ubuntu vanaf een USB-stick opgestart, volg deze stap!</p><br/>

    <a class="fancybox" href="/images/nl/opstarten/4.jpg" data-fancybox-group="gallery thumb button"
       title="Ubuntu controleert zichzelf op fouten.">
        <img src="/images/nl/opstarten/4.jpg" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Ubuntu controleert zichzelf op fouten.</p><br/>

    @include('includes.ad')

    <a class="fancybox" href="/images/nl/opstarten/5.jpg" data-fancybox-group="gallery thumb button"
       title="Hij is klaar, in dit geval zijn er geen fouten gevonden en kunnen we verder. Wel fouten? Downlooad dan het bestand opnieuw en maak de USB opnieuw aan. Druk op ENTER om de pc te herstarten.">
        <img src="/images/nl/opstarten/5.jpg" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Hij is klaar, in dit geval zijn er geen fouten gevonden en kunnen we verder. Wel fouten? Downlooad dan het
        bestand opnieuw en maak de USB opnieuw aan. Druk op ENTER om de pc te herstarten.</p><br/>

    <a class="fancybox" href="/images/nl/opstarten/6.jpg" data-fancybox-group="gallery thumb button"
       title="Laat Ubuntu nu gewoon starten.">
        <img src="/images/nl/opstarten/6.jpg" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Laat Ubuntu nu gewoon starten.</p><br/>

    <a class="fancybox" href="/images/nl/opstarten/7.png" data-fancybox-group="gallery thumb button"
       title="We zijn op het bureaublad en kunnen verder!">
        <img src="/images/nl/opstarten/7.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>We zijn op het bureaublad en kunnen verder!</p><br/>

    <p>Nu kunnen we verder met Ubuntu echt <a href="/installeren/installatie">installeren</a>!</p>

    @include('includes.loadfancybox')

@stop