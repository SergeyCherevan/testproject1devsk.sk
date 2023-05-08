<!doctype html>
<html lang="ua">

<head>
  <meta charset="utf-8">
  <title>Testovací Project 1 pre DEVSK s.r.o.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <?php
            include_once 'Repositories/CategoryRepository.php';
            include_once 'Repositories/BookRepository.php';

            $categoryRepo = new \Repositories\CategoryRepository();
            $bookRepo = new \Repositories\BookRepository();

            $categories = $categoryRepo->getAll();
            $books = $bookRepo->getAll();
        ?>

        </br>

        <?php
            include_once 'Partials/form_to_add_book.php';
        ?>

        </br>

        <?php
            include_once 'Partials/books_table.php';
        ?>

        <div class="text-center">
            <a href="get_books_json.php">
                <button class="btn btn-primary">Získajte údaje o knihách vo formáte JSON</button>
            </a>
        </div>

        </br>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
</body>

</html>