<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar bg-primary navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Notes App</a>
        </div>
        
    </nav>
    <section class="p-5 bg-light">
        <div class="container-sm">
            <form class="row" action="create.php" method="POST">
                <input type="hidden" name="id">
                <div class="col-md-5">
                    <input class="form-control mb-3" type="text" name="title" id= "input1" placeholder="Note Title">
                    <textarea name="description" class="form-control mb-3" cols="30" rows="4" placeholder="Note Description"></textarea>
                    <button type="button" class="btn btn-outline-primary">New Note</button>
                </div>
            </form>
        </div>
    </section>

    <section class="p-5 bg-light">
        <div class="container-sm">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <a href="">Sample note</a>
                    </div>
                    <div class="card-text">
                        Sample note description
                    </div>
                    <small>26/02/20 16:43:00</small>
                    <button class="close">X</button>
                </div>  
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>