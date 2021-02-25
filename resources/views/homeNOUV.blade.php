<!doctype html>
<!-----  https://youtu.be/Bwk-Q_Ua-jM  -->
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Le mauresque</title>
  <style>
    }

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

    img.lecentre {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <br><br>
        <img src="assets/img/gif2.gif" class="img-fluid  lecentre" alt="Responsive image">
        <table class="table  table-striped">
          <thead>
            <tr>
              <th scope="col">
                <div> <a class="btn1 mt-2 mb-5 " href="{{ url('tasks') }}"> Les réservations </a> </div>
              </th>
              <th scope="col">
                <div> <a class="btn1 mt-2 mb-5 " href="{{ url('message') }}">Les Messages </a> </div>
              </th>
              <th scope="col">
                <div> <a class="btn1 mt-2 mb-5 " href="{{ url('/users')  }}">Les Employés </a> </div>
              </th>
              <th scope="col">
                <div> <a class="btn1 mt-2 mb-5 " href="{{ url('/deconnexion') }}">Se déconnecter </a> </div>
              </th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>