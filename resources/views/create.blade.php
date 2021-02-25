@extends('layout.master')
@section('content')
<div class="container mt-5">
  <form method="POST" action="{{ url('tasks/create') }}">
    @csrf
    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
      <h3 class="text-center">Formulaire de réservation</h3>
      <br><br>
      <div class="form-row">
        <div class="col-lg-4 co l-md-6 form-group">
          <label><b> Nom </b></label>
          <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror">
          @if($errors ->has('nom')) <p> {{ $errors->first('nom') }} </p>
          @endif
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <label><b> Adresse mail</b> </label>
          <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
          @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
          @endif
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <label><b> Numéro de Téléphone (09-82-40-64-78) </b> </label>
          <input type="tel" class="form-control @error('tel') is-invalid  @enderror" name="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="{{ old('tel') }}">
          @if($errors ->has('tel')) <p> {{ $errors->first('tel') }} </p>
          @endif
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <label><b> Date (JJ/MM/AAAA) </b></label>
          <input type="date" name="date_de_reservation" class="form-control @error('date_de_reservation') is-invalid  @enderror" value="{{ old('date_de_reservation') }}">
          @if($errors ->has('date_de_reservation')) <p> {{ $errors->first('date_de_reservation') }} </p>
          @endif
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <label for="appt-time"> <b>Heure (entre 11:00 et 23:00) </b></label>
            <input type="time" name='heure_de_reservation' pattern="[0-9]{2}:[0-9]{2}" class="form-control @error('heure_de_reservation') is-invalid 
            @enderror" value="{{ old('heure_de_reservation') }}" min="11:00" max="23:00">
          @if($errors ->has('heure_de_reservation')) <p> {{ $errors->first('heure_de_reservation') }} </p>
          @endif
        </div>
        <div class="col-lg-4 col-md-6 form-group">
          <label><b> Nombre de personnes</b> </label>
          <input type="number" class="form-control" name='nbr_de_personne' class="form-control  @error('nbr_de_personne') is-invalid  @enderror" value="{{ old('nbr_de_personne' ) }}">
          @if($errors ->has('nbr_de_personne')) <p> {{ $errors->first('nbr_de_personne') }} </p>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label><b> Commentaire</b> </label>
        <textarea name="message" class="form-control  @error('message') is-invalid  @enderror " rows="5"> {{ old('message') }} </textarea>
        @if($errors ->has('message')) <p> {{ $errors->first('message') }} </p>
        @endif
      </div>
      <div class="text-center"> <button type="submit" class="btn btn-primary ">Valider</button>
        <a class="btn btn-danger" href="{{ url('/tasks') }}">Menu précédent</a> </div>
</div>
</form>
</div>
@endsection