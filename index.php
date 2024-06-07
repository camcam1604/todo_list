<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>To-Do</title>

    <head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo_todo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-middle">
                        To-Do
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Créer une todo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Voir mes listes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="container">
                <h1>To-Do List</h1>
                <p>Créer ma propre to-do liste</p>
            </section>
            <section class="container">
                <div class="task-form ">
                    <form method="post" action="index.php" class="container">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="newtask" placeholder="Nouvelle tâche" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <input type="submit" class="btn btn-success" value="Ajouter">
                            </div>
                    </form>
                </div>
        </main>
        <footer>
            <p>Copyright 2024</p>
            <p>To Do List</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>