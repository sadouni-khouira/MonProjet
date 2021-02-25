@extends('layout.master')
@section('content')

<div class="container mt-5">
  <form method="POST" action="{{ url('tasks/edit/'.$tasks->id) }}">
    @csrf
    <div class="form-row">
      <div class="col-lg-4 col-md-6 form-group">
        <label><b>Nom </b></label>
        <input type="text" name="nom" class="form-control  @error('nom') is-invalid  @enderror " value="{{ $tasks->nom }}">
        @if($errors ->has('nom')) <p> {{ $errors->first('nom') }} </p>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group">
        <label><b>Adresse mail </b></label>
        <input type="email" class="form-control  @error('email') is-invalid  @enderror " name="email" value="{{ $tasks->email  }}">
        @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group">
        <label><b> Téléphone (09-82-40-64-78) </b></label>
        <input type="tel" class="form-control  @error('tel') is-invalid  @enderror " name="tel" value="{{ $tasks->tel }}">
        @if($errors->has('tel')) <p> {{ $errors->first('tel') }} </p>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group">
        <label><b>Date (JJ/MM/AAAA)</b></label>
        <input type="date" name="date_de_reservation" class="form-control  @error('date_de_reservation') is-invalid  @enderror " value="{{ $tasks->date_de_reservation }}">
        @if($errors ->has('date_de_reservation')) <p> {{ $errors->first('date_de_reservation') }} </p>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group">
        <label for="appt-time"><b>Heure (12:00 - 18:00) </b></label>
        <input type="time" class="form-control  @error('heure_de_reservation') is-invalid  @enderror " name='heure_de_reservation' value="{{ $tasks->heure_de_reservation }}" min="11:00" max="23:00">
        @if($errors ->has('heure_de_reservation')) <p> {{ $errors->first('heure_de_reservation') }} </p>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group">
        <label><b> Nombre de personnes </b></label>
        <input type="number" class="form-control  @error('nbr_de_personne') is-invalid  @enderror " name='nbr_de_personne' value="{{ $tasks->nbr_de_personne }}">
        @if($errors ->has('nbr_de_personne')) <p> {{ $errors->first('nbr_de_personne') }} </p>
        @endif
      </div>
      <div class="col-lg-12 col-md-10 form-group">
        <label><b> Commentaire</b> </label>
        <textarea name="message" class="form-control  @error('message') is-invalid  @enderror " rows="5"> {{ $tasks->message }} </textarea>
        @if($errors ->has('message')) <p> {{ $errors->first('message') }} </p>
        @endif
      </div>
    </div>
    <div class="text-center"> <button type="submit" class="btn btn-primary">Valider</button>
      <a class="btn btn-success " href="{{ url('/tasks') }}">Menu précédent</a> </div>
    <br>
  </form>

  <form action="{{ url('tasks/delete/'.$tasks->id) }}" method="POST" onsubmit="return confirm('Etes-vous sûr ?');">
    @csrf
    @method('DELETE')
    <div class="text-center"> <button class="btn btn-danger " type="submit">Supprimer</button> </div>
  </form>

</div>

@endsection