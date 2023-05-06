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
        <p>Cena: <input type="number" name="price" /></p>
        <p>Autor: <input type="text" name="author" /></p>

        <input type="submit" value="Pridať do zoznamu">
    </form>
</body>
</html>