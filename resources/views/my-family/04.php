<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./../scripts/style.css">
    <title>Educomics</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <a class="navbar-brand" href="../../index.html">
            <img src="../../images/logo.png" width="80" height="80" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../../index.html">Home</a>
                </li>
            </ul>
        </div>
    </nav>


<div class="content">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <img src="../../images/my-family/my-family.svg" class="img-fluid">
        </div>

        <div class="row mt-3">
            <div class="col">
                <img src="../../images/my-family/exercise-03.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <p>Many people say I</p>

            <select class="mr-2 ml-2" id="question">
                <option selected>Choose...</option>
                <option value="1">take down</option>
                <option value="2">take away</option>
                <option value="3">take back</option>
                <option value="4">take after</option>
            </select>


            <p>my mom in terms of appearance.</p>
        </div>

        <div class="row mt-2">
            <div id="result" class="ml-auto text-white p-2"></div>
        </div>

        <div class="row mt-2" id="q-3">
            <input class="btn btn-outline-info" type="submit" value="Submit" id="submit3"><a
                class="btn btn-outline-dark ml-auto" href="05" role="button">next</a>
        </div>
    </div>
</div>


<footer class="footer">
        <p class="text-muted">&copy;ecomap</p>
    </footer>


    <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../../scripts/script.js"></script>
</body>

</html>
