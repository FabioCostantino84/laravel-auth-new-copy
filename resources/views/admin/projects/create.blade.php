@extends('layouts.admin')

@section('content')

<h1>Create</h1>

<div class="col-6 mx-auto">
    <form action="{{ route('project.store') }}" method="post">
        
        @csrf
        
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            {{-- utilizziamo la funzione old per ridare all'utente i valori inseriti prima,in caso di errore --}}
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="scrivi un titolo per il tuo progetto" value="{{ old('title') }}">
            <small id="titleHelper" class="form-text text-muted">Scrivi un titolo per il tuo progetto</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            {{-- utilizziamo la funzione old per ridare all'utente i valori inseriti prima,in caso di errore --}}
            <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Scrivi una descrizione per il tuo progetto" value="{{ old('description') }}">
            <small id="descriptionHelper" class="form-text text-muted">Scrivi una descrizione per il tuo progetto</small>
        </div>
        
        <div class="mb-3">
            <label for="authors" class="form-label">Autore/i</label>
            {{-- utilizziamo la funzione old per ridare all'utente i valori inseriti prima,in caso di errore --}}
            <input type="text" class="form-control" name="authors" id="authors" aria-describedby="help" placeholder="Scrivi gli autori del tuo progetto" value="{{ old('authors') }}">
            <small id="authorsHelper" class="form-text text-muted">Scrivi gli autori del tuo progetto</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Aggiungi progetto</button>
        
    </form>
</div>


@endsection