<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Le mauresque</title>
  <style>
    .container {
      padding: 2rem 0rem;
    }

    h4 {
      margin: 2rem 0rem 1rem;
    }

    .table-image {

      td,
      th {
        vertical-align: middle;
      }
    }
  </style>
</head>

<body>
  @if(!$users->isEmpty())
  <br>
  <h1 class="text-center"> {{ $users->count() }} {{ str_plural('UTILISATEUR') }}</h1>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-dark table-striped">
          <thead class="thead-dark">
            <tr class="text-center">
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody class="text-center">
            @foreach ($users as $user)
            <tr>
              <td> {{ $user->name }}</td>
              <td> {{ $user->email }}</td>
              <td>
                <a class="btn  btn-success text-center mt-4" href="{{ url('users/edit/'.$user->id) }}">Modifier</a>
                <a class="btn  btn-success text-center mt-4" href="{{ url('users/editPASSE/'.$user->id) }}">Modifier Mot de passe</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$users->links()}}
        @else
        <IMG style="width:20%;height:10%;margin-left:40%; margin-right:50%;" src="assets/img/sorry.gif" alt=" ">
        <div class="text-center">
          <marquee>
            <p class="btn btn-danger  mt-4 "> Aucun utilisateur inscrit pour le moment </p>
          </marquee>
        </div>

        @endif
        <div class="text-center">
          <p>Vous n'avez pas de compte ? <a href="{{ url('users/create') }}"> S'inscrire</a></p>
          <a class="btn btn-danger mt-4" href="{{ url('/apresC') }}">Menu précédent</a>
        </div>
      </div>
    </div>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>