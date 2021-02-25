<!doctype html>
<!-----  https://youtu.be/Bwk-Q_Ua-jM  -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
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
    
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <br /> <br />
                    <img style="width:100%;height:100%; margin-top:-48px;" src="assets/img/gif5.gif" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 ">Le mauresque </h1>
                    <form method="post">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label> Adresse Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                @if($errors ->has('email')) <p> {{ $errors->first('email') }} </p>
                                @endif
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-lg-10">
                                <label> Mot de passe</label>
                                <input type="password" name="password" class="form-control @error('email') is-invalid @enderror">
                                @if($errors ->has('password')) <p> {{ $errors->first('password') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-10">
                                <label> Mot de passe confirme</label>
                                <input type="password" name="password_confirmation" class="form-control @error('email') is-invalid @enderror">
                                @if($errors ->has('password')) <p> {{ $errors->first('password') }} </p>
                                @endif
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="btn1 mt-3 mb-5">Valider</button>
                            <a class="btn btn-danger mt-4 float-right" href="{{ url('utilisateurs') }}">Menu précédent</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>