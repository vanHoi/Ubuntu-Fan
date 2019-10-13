@extends('master')
@section('head')
    <title>Ubuntu Fan - Gastenboek</title>
@stop
@section('content')
    <h1 class="bottom-spacer">Gastenboek</h1>

    @include('includes.succes_error_viewer')

	<p class="top-spacer bottom-spacer">
        Als u een op- of aanmerking heeft over de site, dan kunt u deze in het gastenboek plaatsen. Alvast bedankt, ik
        waardeer reacties altijd enorm!
    </p>

    <form method="post" action="{{ route('guestbook.store') }}" class="bottom-spacer">
        @csrf
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Naam" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="message">Bericht</label>
            <p class="help-block">Witregels en opmaak gaan verloren.</p>
            <textarea class="form-control" rows="4" id="message" name="message" placeholder="Bericht..." required></textarea>
        </div>
        <button type="submit" class="btn btn-default">Toevoegen</button>
    </form>

    <h2 class="top-spacer">Vermeldingen</h2>
    <table class="table table-striped">
        <tbody>
            @forelse($entries as $entry)
                    <tr>
                        <td scope="row">
                            <b>{{$entry->name}}</b><br>
                            <i>{{ date_format($entry->created_at,"d-m-Y") }}</i>
                        </td>
                        <td>{{$entry->message}}</td>
                    </tr>
            @empty
                <tr><td>Er zijn nog geen vermeldingen in het gastenboek!</td></tr>
            @endforelse
        </tbody>
    </table>

@stop
