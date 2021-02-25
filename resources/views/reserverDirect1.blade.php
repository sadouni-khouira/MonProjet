<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Le mauresque</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(219, 226, 226);
        }

        .row {
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100px;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background: white;
            border: 1px solid;
            color: black;
        }
    </style>
</head>

<body>
    <br>
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <br /> <br />
                    <img style="width:100%;height:100%; margin-top:-48px;" src="assets/img/rese.gif" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 "> Formulaire de réservation</h1>
                    <form method="post">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label><b> Nom </b> </label>
                                <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror">
                                @if($errors ->has('nom')) <p> {{ $errors->first('password') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label><b> Adresse Email </b> </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label> <b> Numéro de Téléphone (09-82-40-64-78) </b> </label>
                                <input type="tel" class="form-control @error('tel') is-invalid  @enderror" name="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="{{ old('tel') }}">
                                @if($errors ->has('tel')) <p> {{ $errors->first('tel') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label> <b> Date (JJ/MM/AAAA) </b> </label>
                                <input type="date" name="date_de_reservation" class="form-control @error('date_de_reservation') is-invalid  @enderror" value="{{ old('date_de_reservation') }}">
                                @if($errors ->has('date_de_reservation')) <p> {{ $errors->first('date_de_reservation') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label> <b> Heure (entre 11:00 et 23:00) </b> </label>
             <input type="time" name='heure_de_reservation' pattern="[0-9]{2}:[0-9]{2}" class="form-control  @error('heure_de_reservation') is-invalid  @enderror " value="{{ old('heure_de_reservation') }}" min="11:00" max="23:00">
                                @if($errors ->has('heure_de_reservation')) <p> {{ $errors->first('heure_de_reservation') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label><b> Nombre de personnes </b> </label>
                                <input type="number" name='nbr_de_personne' class="form-control  @error('nbr_de_personne') is-invalid  @enderror " value="{{ old('nbr_de_personne' ) }}">
                                @if($errors ->has('nbr_de_personne')) <p> {{ $errors->first('nbr_de_personne') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label><b> Commentaire</b> </label>
                                <textarea name="message" class="form-control  @error('message') is-invalid  @enderror " rows="5"> {{ old('message') }} </textarea>
                                @if($errors ->has('message')) <p> {{ $errors->first('message') }} </p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn1 mt-3 mb-5">Valider</button>
                            <a class="btn btn-danger mt-4 float-right" href="{{ url('/') }}">Menu précédent</a> </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>