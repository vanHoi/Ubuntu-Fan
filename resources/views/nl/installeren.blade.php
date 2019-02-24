@extends('master')
@section('head')
    <title>Ubuntu Fan - Installeren</title>
@stop
@section('content')
    <h1>Installeren</h1>

    <p>Hier help ik u op weg met het installeren van Ubuntu. Eerst moet u echter nog kiezen welke versie van Ubuntu u
        het best kunt gebruiken. Dit zijn slechts twee stappen, waarna u direct met de installatie wordt verder
        geholpen.

    <p><strong>1. De 32-bits-versie of de 64-bits-versie?</strong></p>

    <p>Ubuntu raadt standaard 64 bits aan, dit werkt op ieder systeem, dus dat is ook mijn advies. Het is ook de
        standaard optie bij het downloaden.</p>

    <p>Het verschil zit hem in de hoeveelheid werkgeheugen die u heeft (RAM-geheugen). Vanaf 4GB kunt u niet meer alles
        gebruiken met de 32 bits versie. Linux heeft hier echter wel een oplossing voor, de zogenaamde PAE-kernel﻿. Men
        heeft speciale aanpassingen gemaakt voor 32-bits-kernels. De kernel is het hart van het besturingssysteem. Een
        PAE-kernel heeft geen last van het zogenaamde geheugengat, en kan zelfs maximaal 64 GB RAM-geheugen bedienen!
        Wanneer 32-bits-Ubuntu bij de installatie meer dan 3 GB RAM-geheugen ziet, installeert hij automatisch de
        PAE-kernel. In de praktijk werkt de 64 bits versie tegenwoordig beter, deze werkt ook gewoon op systemen met
        minder dan 4GB aan geheugen.</p>

    <p><strong>﻿2. De oudere LTS-versie (18.04) of de nieuwste gewone versie (bijvoorbeeld 18.10)?</strong></p>

    <p>In april 2016 is 16.04 Xenial Xerus verschenen. Dat is een zogeheten LTS-versie, als u meer wilt weten over LTS
        versies, verwijs ik u <a href="/ubuntu/denaam" target="_self">hierheen</a>. De nieuwere Ubuntu versie, bijvoorbeeld
        16.10 Yakkety Yak die in oktober 2016 uitkomt, is geen LTS-versie, maar een gewone versie. De gewone versies
        zijn goed, maar de LTS is stabieler. De LTS-versie is namelijk extra stabiel en extra betrouwbaar gemaakt, want
        deze releases zijn mede ontworpen voor de zakelijke markt. Ook word de normale versie maar 9 maanden
        ondersteunt, over het algemeen zal de LTS versie dus beter bij de gemiddelde gebruiker passen.</p>

    <br/><p>Met deze informatie kunt u een veilige keuze maken, en dan kunnen we nu door naar het <a
                href="/installeren/downloaden" target="_self">downloaden van Ubuntu</a>!</p>

    <center><img src="/images/installeren.png" alt="Ubuntu 16.04"/></center>

@stop