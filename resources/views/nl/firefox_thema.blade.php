@extends('master')
@section('head')
    <title>Ubuntu Fan - Firefox Thema</title>
@stop
@section('content')
    <h1>Firefox's uiterlijk aanpassen</h1>

    <h2>Thema's</h2>
    <p>Op Firefox kunt u thema's toepassen, waarmee u uw browser een beetje persoonlijkheid geven. <a
            href="https://addons.mozilla.org/nl/firefox/themes/" target="_blank">Klik hier</a> om alle thema's te
        bekijken. Klik vervolgens op eentje die u mooi vindt, en selecteer installeren. Klaar, zo makkelijk is het! Wilt
        u een ander thema? Selecteer dan gewoon weer toepassen.</p>

    <h2>Werkbalken en Iconen</h2>
    <p>Niet tevreden met de hoeveelheid knoppen die u ziet, geen zorgen, ook dit is aan te passen!</p>

    <a class="fancybox" href="/images/nl/firefox/4.png" data-fancybox-group="gallery thumb button"
       title="Ga naar aanpassen.">
        <img src="/images/nl/firefox/4.png" class="img-responsive" title="Firefox Menu"/>
    </a>
    <p>Ga naar de optie 'Aanpassen' in het menu, door eerst op de drie streepjes rechtsbovenin te klikken.'</p>

    <a class="fancybox" href="/images/nl/firefox/5.png" data-fancybox-group="gallery thumb button"
       title="Hier kunt u via drag & drop knoppen plaatsen en verwijderen.">
        <img src="/images/nl/firefox/5.png" class="img-responsive" title="Firefox Aanpassen Scherm"/>
    </a>
    <p>Dit venster opent, hier kunt u via drag & drop knoppen plaatsen en verwijderen. Via de knop Werkbalken kunt u
        deze
        eventueel verbergen als u deze heeft.<p>
    <p>Als u klaar bent, klik rechtsonder op 'Aanpassen afsluiten'.</p>

    @include('includes.loadfancybox')
@stop
