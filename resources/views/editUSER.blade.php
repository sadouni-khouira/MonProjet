@extends('layout.master')

@section('content')
<div class="container mt-5">
  <form method="POST" action="{{ url('users/edit/'.$users->id) }}">
    @csrf
    <div class="form-group">
      <label><b> Nom </b> </label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}">
    </div>

    <div class="form-row">
      <label> <b> Adresse Email</b> </label>
      <input type="email" name="email" value="{{ $users->email}}" class="form-control @error('email') is-invalid @enderror">
      @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
      @endif
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