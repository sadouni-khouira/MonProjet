@extends('layout.master')

@section('content')
<div class="container mt-5">
  <form method="POST" action="{{ url('users/editPASSE/'.$users->id) }}">
    @csrf
    <div class="form-row">
      <div class="col-lg-10">
        <label><b> Nom </b> </label>
        <mark> {{ $users->name }}</mark>
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-10">
        <label> <b> Adresse Email </b> </label>
        <mark> {{ $users->email }} </mark>
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-10">
        <label> <b> Votre nouveau Mot de passe </b> </label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
        @if($errors ->has('password')) <p> {{ $errors->first('password') }} </p>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-10">
        <label><b> Confirmez votre nouveau Mot de passe </b> </label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
        @if($errors ->has('password')) <p> {{ $errors->first('password') }} </p>
        @endif
      </div>
    </div>
    <br>
    <div class="text-center">
      <button type="submit" class="btn btn-primary ">Valider</button>
      <a class="btn  btn-success " href="{{ url('/users') }}">Menu précédent</a> </div>
  </form>

  <form action="{{ url('users/delete/'.$users->id) }}" method="POST" onsubmit="return confirm('Etes-vous sûr ?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger " type="submit">Supprimer</button>
  </form>
  
</div>
@endsection