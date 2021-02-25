<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>

    section{

height: 110vh;
background:black;
background-image:url(https://image.noelshack.com/fichiers/2016/46/1479248501-smoke-pass-720p.gif);
background-repeat : no-repeat ;
background-position:50% 50%;

}
h1{

position: absolute;
top:50%;
transform: translateY(-50%);
width:100%;
text-align: center;
color: #03e9f4;
font-size: 5em;
font-family: sans-serif;
letter-spacing: 0.2em;
}
h1 span{
display: inline-block;
animation: animate 8s linear infinite;
}

@keyframes animate
{
0%{
  opacity: 0;
  transform: rotateY(90deg);
    filter: blur(10px);

}
100%{
  opacity: 1;
  transform: rotateY(0deg);
    filter: blur(0);
}

}

</style>
<body>
<section>
<h1>
    <span>Votre </span>
    <span>message</span>
    <span>a bien été</span>
    <span>enregistré</span>
  
  
</h1>
<br><br><br><br>
<div class="text-center margin-top:400px " ><a  href="{{ url('/') }}" >Cliquer ici pour retourner au Site></a></div>

</section>

</body>

</html>