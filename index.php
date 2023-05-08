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

        </br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 border border-2 border-primary position-relative rounded rounded-5">

                    <h2 class="text-center">Formulár pre pridanie knihy do zoznamu:</h2>
                    <form action="add_book.php" method="POST">
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Názov knihy:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="isbn" class="col-sm-2 col-form-label">ISBN:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="isbn" name="isbn">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Cena:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price" step="0.01">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">Kategória:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" name="category">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="author" class="col-sm-2 col-form-label">Autor:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="author" name="author">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Pridať do zoznamu</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <?php
            $pdo = new PDO('sqlite:app_data/testproject1devsk.db');

            $statement = $pdo->query('SELECT * FROM books');
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        </br>

        <h2 class="text-center">Zoznam kníh:</h2>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Názov knihy</th>
                    <th>ISBN</th>
                    <th>Cena</th>
                    <th>Kategória</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($results as $row) {
                ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['title']?></td>
                            <td><?=$row['isbn']?></td>
                            <td><?=$row['price']?></td>
                            <td><?=$row['category']?></td>
                            <td><?=$row['author']?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
</body>

</html>