@extends('master')
@section('head')
    <title>Ubuntu Fan - Welkom!</title>
@stop
@section('content')
    <h1>Welkom bij Ubuntu Fan!</h1>
    <br>
    <p>Op deze site leert u alles over de eerste stappen met Ubuntu. Ook kunt u hier terecht voor allerlei handige tips
        en handleidingen. Selecteer bovenaan deze pagina simpelweg een onderwerp, en u kunt aan de slag. Op mijn site
        probeer ik alles zo simpel mogelijk uit te leggen, en moeilijke woorden te vermijden, zodat u snel en makkelijk
        wegwijs wordt in Ubuntu. Op de site maak ik veel gebruik van afbeeldingen, op veel van deze afbeeldingen kunt u
        klikken om ze groter te maken. Ik wens u veel plezier toe met Ubuntu!</p>

    <img src="/images/ubuntulogo.png" alt="Ubuntu" class="img-responsive center-block rounded-corners"
         style="max-width: 300px;">

    <h6>Ubuntu</h6>
    <p>Waarschijnlijk heeft u wel eens over Ubuntu gehoord, maar nooit iets mee gedaan. Zeer onterecht. Deze site helpt
        u met de eerste stappen, en laat zien hoe Ubuntu werkt. U komt regelmatig pagina's tegen met veel tekst. Dit
        komt omdat een besturingssysteem een moeilijk onderwerp is. Vraag uzelf maar eens af: 'Hoelang duurde het voor
        ik Windows een beetje onder de knie had?'. Waarschijnlijk wel een hele tijd. Dat geldt ook voor Ubuntu, maar
        bent u eenmaal ermee begonnen, dan went het vanzelf. Maar ook als u nog nooit met een computer heeft gewerkt, is
        Ubuntu een goede keuze.</p>

    @include("includes.ad")

    <img src="/images/1610.jpg" alt="Versie 16.10" class="img-responsive img-rounded right"
         style="max-width: 325px; margin-left: 15px;">

    <p>Deze site gaat voornamelijk over Ubuntu 16.04, de versie die ik ook aanraad om te gebruiken, omdat deze langer
        updates krijgt. Mocht u er echter toch voor kiezen een nieuwere versie te gebruiken; bijna alles op deze site is
        ook van toepassing op de nieuwste versie, de meeste verschillen zitten namelijk 'onder de motorkap'. Meer weten?
        Kijk dan eens <a href="/ubuntu/denaam" target="_self">hier</a>!<br>
        Rond 26 april komt de nieuwe lang ondersteunde versie (LTS) van Ubuntu weer uit, versie 18.04 met codenaam
        Bionic Beaver. Wanneer deze uitkomt zal ik de website weer bijwerken naar de nieuwste versie.</p>

    <p style="clear: both; font-style: italic; float: right; font-size: 10px; padding-right: 10px;">Afbeelding van <a
                href="https://itsfoss.com/ubuntu-16-10-codename/" target="_blank">itsfoss.com</a></p>

    <div class="clearfix"></div>

    <p class="text-center" style="font-weight: bold;"><a href="/ubuntu/rondleiding" target="_self">Interessant? Neem de
            rondleiding door Ubuntu!</a></p>

    <p class="text-center" style="font-weight: bold;"><a href="/gastenboek" target="_self">Ideeën, tips, opmerkingen,
            lofprijzingen e.d. voor deze site? Plaats ze in het gastenboek. Alvast bedankt!</a></p>
@stop