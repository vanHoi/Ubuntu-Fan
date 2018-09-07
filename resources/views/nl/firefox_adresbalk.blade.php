@extends('master')
@section('head')
    <title>Ubuntu Fan - Firefox Adresbalk</title>
@stop
@section('content')
    <h1>De Adresbalk</h1>
    <p>Standaard moet u in Ubuntu twee keer klikken op de adresbalk om de tekst erin gelijk te selecteren, in Windows
        hoeft u echter slechts een keer te klikken. Gelukkig is dit aan te passen, en dat gaat zo.</p>

    <p>Open eerst een nieuw tabblad, en typ vervolgens 'about:config' in de adresbalk.</p>

    <a class="fancybox" href="/images/nl/firefox/1.png" data-fancybox-group="gallery thumb button"
       title="U zult een melding te zien krijgen zoals hier, klik op ga verder">
        <img src="/images/nl/firefox/1.png" class="img-responsive" title="Waarschuwing"/>
    </a>
    <p>U zult een melding te zien krijgen zoals hierboven, klik op 'Ik aanvaard het risico!'</p>


    <a class="fancybox" href="/images/nl/firefox/2.png" data-fancybox-group="gallery thumb button"
       title="Typ 'browser.urlbar.clickSelectsAll' in het zoekveld.">
        <img src="/images/nl/firefox/2.png" class="img-responsive" title="Waarde False"/>
    </a>
    <p>Typ het volgende in het zoekveld: browser.urlbar.clickSelectsAll</p>


    <a class="fancybox" href="/images/nl/firefox/3.png" data-fancybox-group="gallery thumb button"
       title="Waarde staat nu op 'true'. U kunt het tabblad nu sluiten!">
        <img src="/images/nl/firefox/3.png" class="img-responsive" title="Waarde True"/>
    </a>
    <p>Dubbelklik op de regel tekst die tevoorschijn komt, zodat er bij waarde true komt te staan. Nu werkt de adresbalk
        net als in Windows, en kunt u het tabblad sluiten!</p>

    <br>

    <p>Overigens, mocht u het toch weer ongedaan willen maken, dat gaat op precies dezelfde manier, alleen moet er bij
        waarde dan weer 'false' komen te staan.</p>

    @include('includes.loadfancybox')

@stop