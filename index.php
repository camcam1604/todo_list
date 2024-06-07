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
    <!--Header-->
        <header>
            <nav class="navbar navbar-expand-lg bg-body-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo_todo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-middle">
                        To-Do
                    </a>
                </div>
            </nav>
        </header>
        <main>
    <!--Titre et sous-titre-->
            <section class="container text-center">
                <h1>To-Do List</h1>
                <p>Créer ma propre to-do liste</p>
            </section>
    <!--Formulaire ajout tâche-->
            <section class="container text-center justify-content-center align-items-center">
                <form action="add_task.php" method="post">
                    <input type="text" name="task" required>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>

    <!--Liste des tâches-->
                <ul id="task-list">
                    <?php include 'display_tasks.php'; ?>
                </ul>
    <!--Bouton supprimer toutes les tâches-->
                <form action="delete_all_tasks.php" method="post">
                    <button type="submit" class="btn btn-success" onclick="return confirm('Êtes-vous sûr de vouloir supprimer toutes les tâches ?')">Supprimer toutes les tâches</button>
                </form>
            </section>
        </main>
        <footer class="footer mt-3 py-3 bg-light text-center">
            <p>&copy; MyDigitalSchool - <?php echo date('Y'); ?> - Camille P & Karen B</p>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>