<!DOCTYPE html>
<html>
<head>
    <title>Testovací Project 1 pre DEVSK s.r.o.</title>
    <meta charset="utf-8">
</head>
<body>
    <h2>Formulár pre pridanie knihy do zoznamu:</h2>
    <form action="add_book.php" method="POST">
        <p>Názov knihy: <input type="text" name="title" /></p>
        <p>ISBN: <input type="text" name="isbn" /></p>
        <p>Cena: <input type="number" name="price" step="0.01" /></p>
        <p>Kategória: <input type="text" name="category" /></p>
        <p>Autor: <input type="text" name="author" /></p>

        <input type="submit" value="Pridať do zoznamu">
    </form>

    <?php
        $pdo = new PDO('sqlite:app_data/testproject1devsk.db');

        $statement = $pdo->query('SELECT * FROM books');
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h2>Zoznam kníh:</h2>
    <table>
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
</body>
</html>