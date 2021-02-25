@extends('layout.master')

@section('content')
<div class="container mt-5">
  <form method="POST" action="{{ url('message/showM/'.$message->id) }}">
    @csrf
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Le message</h1>
          <table class="table table-dark table-striped">
            <thead class="thead-dark">
              <tr class="text-center">
                <th scope="col">Nom</th>
                <th scope="col">E_mail</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <b><td> {{ $message->nom }}</td></b>
                <td> {{ $message->email}} </td>
                <td> {{ $message->message}} </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
  <div class="text-center">
    <a class="btn btn-primary " href="{{ url('/message') }}">Menu précédent</a></div>
  <br>
  <form action="{{ url('message/delete/'.$message->id) }}" method="POST" onsubmit="return confirm('Etes-vous sûr ?');">
    @csrf
    @method('DELETE')
    <div class="text-center"> <button class="btn btn-danger " type="submit">Supprimer</button> </div>
  </form>
</div>
@endsection