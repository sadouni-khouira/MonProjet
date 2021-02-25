@extends('layout.master')

@section('content')
<style>
  * {
    background-color: black;
    margin: 0px;
  }
</style>
<div class="  " style="background-color: black; padding:30px;">
  <form method="POST" action="{{ url('message/createM') }}">
    @csrf
    <img style="width:100%;margin-top:-48px;" src="assets/img/gif6.gif" alt="">
    <br><br>
    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
      <div class="form-row">

        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid d @enderror " placeholder="Votre Nom">
          @if($errors ->has('nom')) <p> {{ $errors->first('nom') }} </p>
          @endif
        </div>

        <div class="col-lg-4 col-md-6 form-group">
          <input type="email" class="form-control @error('email') is-invalid d @enderror " name="email" value="{{ old('email') }}" placeholder="Adresse mail">
          @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
          @endif
        </div>


      </div>
      <div class="form-group">
   <!---   <input style="height:70px;"  type="text" class="form-control @error('message')) is-invalid d @enderror " name="message" value="{{ old('message') }}" rows="5"></input> 
  --->    <label><b> Commentaire</b> </label>
       <textarea name="message" class="form-control  @error('message') is-invalid  @enderror " rows="5" > {{ old('message') }} </textarea>
      @if($errors ->has('message')) <p> {{ $errors->first('message') }} </p>
        @endif
      </div>
      <button type="submit" class="btn btn-primary float-right">Valider</button>
      <a class="btn btn-primary mt-4" href="{{ url('http://127.0.0.1:8000') }}">Menu précédent</a>
    </form>
</div>

@endsection