<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="meow.css"> 
       <script>
        function show(shown, hidden) {
            document.getElementById(shown).style.visibility = 'visible';
            document.getElementById(hidden).style.visibility = 'hidden';
            return false;
        }
    </script>
</head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top fs-4">
        <a class="navbar-brand" href="#">
            <img src="Img/loho.png" width="110rem" height="110rem" id="Schloss">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" onclick="return show('AboutPage','AccountPage');" href="#">Home<span
                            class="sr-only"></span></a></li>
                <li class="nav-item">
                    <a class="nav-link" onclick="return show('AccountPage','AboutPage');" href="#">Alle Gruppen</a>
                </li>
            </ul>
        </div>
    </nav>

    <body class="text-center">

    <div class="container">
        <div class="row justify-content-center">

        <div id="AboutPage">

            <div id="container-sm">
                <h1>Wer sind wir?</h1>
                <p>Wir sind alle Fans der Eintracht Spandau.</p>
            </div>

        </div>

        <div id="AccountPage">

        <h1>Cute</h1>

        </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>