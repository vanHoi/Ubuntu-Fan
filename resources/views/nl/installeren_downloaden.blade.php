@extends('master')
@section('head')
    <title>Ubuntu Fan - Ubuntu Downloaden</title>
@stop
@section('content')
    <h1>Ubuntu Downloaden</h1>

    <p>De eerste stap van Ubuntu installeren is aan het installatiebestand komen. Dit kunt u <a
                href="http://www.ubuntu.com/download/desktop" target="_blank">hier downloaden</a> vanaf de website van
        Ubuntu.</p>

    <a class="fancybox" href="/images/nl/downloaden/1.png" data-fancybox-group="gallery thumb button"
       title="Standaard staat als het goed is Ubuntu 16.04 LTS 64 bits geselecteerd. Kies deze versie of eventueel een andere.">
        <img src="/images/nl/downloaden/1.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Standaard staat als het goed is Ubuntu 16.04 LTS 64 bits geselecteerd. Kies deze versie of eventueel een
        andere.</p><br/>

    <a class="fancybox" href="/images/nl/downloaden/2.png" data-fancybox-group="gallery thumb button"
       title="Scroll naar onder, doneer eventueel een bedrag, of klik op 'Not now, take me to the download'.">
        <img src="/images/nl/downloaden/2.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Scroll naar onder, doneer eventueel een bedrag, of klik op 'Not now, take me to the download'.</p><br/>

    <a class="fancybox" href="/images/nl/downloaden/3.png" data-fancybox-group="gallery thumb button"
       title="Een popup-venster opent, download het bestand en sla het ergens op waar u het makkelijk terug kunt vinden. Als u niet kunt kiezen, komt het bestand waarschijnlijk in uw 'Downloads' map.">
        <img src="/images/nl/downloaden/3.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Een popup-venster opent, download het bestand en sla het ergens op waar u het makkelijk terug kunt vinden. Als u
        niet kunt kiezen, komt het bestand waarschijnlijk in uw 'Downloads' map.</p><br/>

    <p>Nu u het bestand heeft gedownload, kunnen we een <a href="/installeren/installatiemedium" target="_self">installatiemedium
            gaan aanmaken</a>.</p>

    @include('includes.loadfancybox')

@stop