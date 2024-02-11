<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXXECUTOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark" data-bs-theme="dark">
    
    <div class="container">
        <nav class="navbar navbar-expand-xl bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="/">EXXECUTOR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="about.php">About</a>
                        <a class="nav-link" aria-current="page" href="">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <span class="mt-5"><br><br><br></span>

        <div class="mt-5">
            <h3>What about?</h3>
            <br><br>
            <span id="responseMessage"></span>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <h6>Select how much prisoner who want to be execute:</h6>
                <br>
                <section>
                    <form id="xmlForm">
                        <select id="item1" name="item1" class="form-select" aria-label="Execution" required>
                            <option selected>--Select--</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <select id="item2" name="item2" class="form-select" aria-label="Execution" required>
                            <option selected>--Select--</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <button type="button" onclick="sendXMLRequest()" class="btn btn-light">Execute</button>
                    </form>
                </section>
                <br>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    
</body>

</html>
