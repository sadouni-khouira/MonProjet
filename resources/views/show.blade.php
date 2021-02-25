@extends('layout.master')

@section('content')
<div class="container mt-5">
  <form method="POST" action="{{ url('tasks/show/'.$tasks->id) }}">
    @csrf
    <div class="form-row">
      <div class="col-lg-4 col-md-6 form-group">
        <h6 class="form-control"><b> {{ $tasks->nom }}</b> </h6>
      </div>

      <div class="col-lg-4 col-md-6 form-group">
        <h6 class="form-control"> <b> {{ $tasks->email}}</b> </h6>
      </div>

      <div class="col-lg-4 col-md-6 form-group">
        <h6 class="form-control"> <b> {{ $tasks->tel }}</b> </h6>
      </div>

      <div class="col-lg-4 col-md-6 form-group">
        <h6 class="form-control"><b>  {{ $tasks->date_de_reservation  }}</b> </h6>
      </div>

      <div class="col-lg-4 col-md-6 form-group">
        <h6 class="form-control"> <b> {{ $tasks->heure_de_reservation  }}</b> </h6>
      </div>

      <div class="col-lg-4 col-md-6 form-group">
        <h6 class="form-control"><b>  {{ $tasks->nbr_de_personne }} </b></h6>
      </div>

      <div class="col-lg-12 col-md-12 form-group" >  <label> Votre Commentaire </label><br>
      <b> {{ $tasks->message }} </b>
      </div>
    </div>
  </form>
  <div class="text-center"> <a class="btn btn-primary " href="{{ url('/tasks') }}">Menu précédent</a></div>
  <br>
  <form action="{{ url('tasks/delete/'.$tasks->id) }}" method="POST" onsubmit="return confirm('Etes-vous sûr ?');">
    @csrf
    @method('DELETE')
    <div class="text-center"> <button class="btn btn-danger " type="submit">Supprimer</button> </div>
  </form>
</div>

@endsection