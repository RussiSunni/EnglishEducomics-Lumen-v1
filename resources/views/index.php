

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




    <div class="container">
        <h3 class="text-center mt-4">My courses</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Completed</th>
                </tr>
            </thead>
            <tbody id="userCourseList"></tbody>
        </table>


        <h3 class="text-center mt-4">All courses</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="./images/index/my-family-title.svg" class="img-fluid">
                    </td>
                    <td>
                        vocabulary
                    </td>
                    <td>
                        <button type="button" id="addCourse1" class="btn btn-info">add</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./images/index/artemis-and-the-animals-title.svg" class="img-fluid">
                    </td>
                    <td>
                        vocabulary
                    </td>
                    <td>
                        <button type="button" id="addCourse2" class="btn btn-info">add</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./images/index/message-in-a-bottle-title.svg" class="img-fluid">
                    </td>
                    <td>
                        vocabulary
                    </td>
                    <td>
                        <button type="button" id="addCourse3" class="btn btn-info">add</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./images/index/a-trip-to-victorian-england-title.svg" class="img-fluid">
                    </td>
                    <td>
                        grammar
                    </td>
                    <td>
                        <button type="button" id="addCourse4" class="btn btn-info">add</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Vue test-->
        <!-- <div id="apptyping">
            <p>{{ message }}</p>
            <input v-model="message">
        </div>


        <div id="app">
            <p v-html="message"></p>
        </div> -->


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

