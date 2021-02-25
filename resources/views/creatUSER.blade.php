@extends('layout.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('users/create') }}">
        @csrf <h3 class="text-center">Formulaire d'inscription</h3>
        <div class="form-group">
            <label><b>Nom </b> </label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}">
        </div>

        <div class="form-row">
            <label><b> Adresse Email </b> </label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}">
            @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
            @endif
        </div>


        <div class="form-row">
            <label><b> Mot de passe </b> </label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
            @if($errors ->has('password')) <p> {{ $errors->first('password') }} </p>
            @endif
        </div>

        <div class="form-row">
            <label><b> Confirmez votre Mot de passe </b> </label>
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
            @if($errors ->has('password')) <p> {{ $errors->first('password') }} </p>
            @endif
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary float-right">Valider</button>
            <a class="btn  btn-success " href="{{ url('/users') }}">Menu précédent</a> </div>
    </form>
</div>

@endsection