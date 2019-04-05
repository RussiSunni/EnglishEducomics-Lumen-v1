<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./script/css/bootstrap.css">
    <link rel="stylesheet" href="./scripts/style.css">
</head>

<body>
    <div class="section">
        <header class="text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-dark">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="./images/logo.png" width="100" height="100" alt="">
                            </a>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">

                                    <li class="nav-item">
                                        <a class="nav-link" href="./views/blog.php">about us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-outline-light rounded-button" href="contact.html"
                                            role="button">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- </div> -->
                        </nav>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <div class="section">
        <div class="container">

            <div class="border border-dark rounded">
                <h3 class="mb-3">account info</h3>
                <p><strong>name:</strong> <span id="currentUser"></span></p>
                <p><strong>familiar:</strong> <span id="familiar"></span></p>
                <p><strong>your current courses:</strong></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Completed</th>
                        </tr>
                    </thead>
                    <tbody id="userCourseList"></tbody>
                </table>

            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
</body>

</html>