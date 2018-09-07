@extends('master')
@section('head')
    <title>Ubuntu Fan - Diashow Installatie</title>
@stop
@section('content')
    <h1>Diashow</h1>

    <p>Tijdens de installatie van Ubuntu 16.04 heeft u een diashow gezien. Wilt u deze nog eens nalezen? Dat kan! Het
        waren acht dia's en hieronder staan ze allemaal!</p>

    <a class="fancybox" href="/images/nl/diashow/slide1.png" data-fancybox-group="gallery thumb button" title="Dia 1.">
        <img src="/images/nl/diashow/slide1.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 1.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide2.png" data-fancybox-group="gallery thumb button" title="Dia 2.">
        <img src="/images/nl/diashow/slide2.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 2.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide3.png" data-fancybox-group="gallery thumb button" title="Dia 3.">
        <img src="/images/nl/diashow/slide3.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 3.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide4.png" data-fancybox-group="gallery thumb button" title="Dia 4.">
        <img src="/images/nl/diashow/slide4.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 4.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide5.png" data-fancybox-group="gallery thumb button" title="Dia 5.">
        <img src="/images/nl/diashow/slide5.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 5.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide6.png" data-fancybox-group="gallery thumb button" title="Dia 6.">
        <img src="/images/nl/diashow/slide6.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 6.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide7.png" data-fancybox-group="gallery thumb button" title="Dia 7.">
        <img src="/images/nl/diashow/slide7.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 7.</p><br/>

    <a class="fancybox" href="/images/nl/diashow/slide8.png" data-fancybox-group="gallery thumb button" title="Dia 8.">
        <img src="/images/nl/diashow/slide8.png" class="img-responsive" title="Ubuntu"/>
    </a>
    <p>Dia 8.</p><br/>

    <p>En Ubuntu geinstalleerd? Kijk <a href="nadeinstallatie.php" target="_self">hier wat u het best direct na de
            installatie moet doen</a>!</p>

    @include('includes.loadfancybox')

@stop