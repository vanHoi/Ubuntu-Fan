@extends('master')
@section('head')
    <title>Ubuntu Fan - De Belofte</title>
@stop
@section('content')
    <h1>De belofte</h1>

    <p>Ubuntu is een volledig opensource besturingssysteem dat gebouwd is rond de Linux-kernel. De Ubuntu-gemeenschap is
        gebaseerd op de idee&euml;n opgesteld in de Ubuntu-filosofie: software moet zonder kosten beschikbaar zijn,
        softwareprogramma's moeten bruikbaar zijn in iemands eigen taal en ook voor mensen met een handicap, en iedereen
        moet de vrijheid hebben om de software in te stellen en aan te passen aan zijn of haar eigen wensen en eisen. Om
        deze redenen geldt:</p>

    <ul>
        <li>Ubuntu zal altijd gratis zijn. Er zijn geen extra kosten voor een 'bedrijfseditie'. Wij doen ons uiterste
            best om ons werk beschikbaar te maken voor iedereen onder dezelfde vrije voorwaarden.
        </li>
        <li>Ubuntu bevat de beste vertalingen en toegankelijkheidsopties die de vrije-softwaregemeenschap te bieden
            heeft, om Ubuntu voor zo veel mogelijk mensen bruikbaar te maken.
        </li>
        <li>Ubuntu wordt regelmatig en volgens een voorspelbaar schema uitgebracht; er is elke zes maanden een nieuwe
            versie. U kunt kiezen om de huidige stabiele versie te gebruiken of de huidige ontwikkelaarsversie. Elke
            ontwikkelaarsversie wordt tenminstens negen maanden ondersteund, en iedere stabiele versie ten minste vijf
            jaar,.
        </li>
        <li>Ubuntu schaart zich volledig achter de grondbeginselen van de opensource-softwareontwikkeling. Wij
            stimuleren mensen om opensource-software te gebruiken, te verbeteren en te verspreiden.
        </li>
    </ul>

    <h6>De filosofie</h6>
    <img src="/images/filosofie.jpg" alt="Filosofie" style="float:right;"/>
    <p>Ubuntu is gebaseerd op een filosofie van vrije software die tot doel heeft om de voordelen van deze software
        overal ter wereld kenbaar te maken. De kern van deze filosofie is:</p>

    <ul>
        <li>Elke computergebruiker moet de vrijheid hebben om software te gebruiken, kopi&euml;ren, verspreiden,
            bestuderen, delen, veranderen en verbeteren voor welk doel dan ook en zonder licentiekosten.
        </li>
        <li>Elke computergebruiker moet software in diens eigen taal kunnen gebruiken.</li>
        <li>Iedereen moet de gelegenheid krijgen om software te gebruiken, onafhankelijk van locatie, nationaliteit of
            handicap.
        </li>
    </ul>

    <p>De Ubuntu filosofie wordt weerspiegeld in de software die we produceren en bundelen binnen onze distributie. Als
        je Ubuntu installeert, voldoet vrijwel alle software aan deze idealen en we werken eraan dat alle software die
        we aanbieden deze vrijheden garandeert.</p>
    <p>De enige uitzondering die we op dit moment maken is voor sommige "drivers" waarvan de broncode niet publiekelijk
        beschikbaar is. Deze zijn echter wel nodig om van de computer gebruik te kunnen maken.</p>

    @include('includes.ad')

    <h6>Vrije software</h6>

    <img src="/images/opensourcelogo.png" alt="Open Source Logo" style="float:left;"/>

    <p>Vrije software wordt in het Engels <i>"free software"</i> genoemd, waarbij free vaakgebruikt wordt als gratis.
        Hoewel Ubuntu altijd gratis zal zijn, is voor Ubuntu de vrijheid belangrijker dan de prijs. Het is deze vrijheid
        waardoor de Ubuntu-community kan groeien en waardoor ervaring en expertise gedeeld kan worden. Alleen zo kan
        Ubuntu verbeterd worden en geschikt gemaakt worden voor nog meer gebruikers en bedrijven.</p>

    <p>Freeware houd in dat je ...</p>
    <ul>
        <li>De vrijheid hebt om software te gebruiken, voor elk doel.</li>
        <li>De vrijheid hebt om software te bestuderen en aan te passen aan persoonlijke behoeften.</li>
        <li>De vrijheid hebt software te verspreiden en zo anderen te helpen.</li>
        <li>De vrijheid hebt software te verbeteren en deze verbeteringen te verspreiden, om zo anderen te helpen.</li>
    </ul>

    <img src="/images/freesoftware.jpg" alt="Open Source Bart" width="267" height="200" style="float:right;"/>

    <h6>Open source</h6>

    <p>Open source is een term die in 1998 is bedacht om de twee betekenissen van het Engelse woord <i>'free'</i> te
        vermijden. Ook Ubuntu is open source. Sommigen vinden de open source en de free software-beweging twee
        verschillende bewegingen met verschillende doeleinden, Ubuntu vind het twee zijden van dezelfde medaille. Beide
        zijden zijn in de Ubuntu-community vertegenwoordigd.</p>

    <p><a href="/ubuntu/voorennadelen" target="_self">Bekijk hier alle voor- en nadelen van Ubuntu</a>!</p>

@stop