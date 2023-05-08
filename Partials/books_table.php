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
                    foreach ($books as $book) {
                ?>
                        <tr>
                            <td><?=$book->id?></td>
                            <td><?=$book->title?></td>
                            <td><?=$book->isbn?></td>
                            <td><?=$book->price?></td>
                            <td><?=$book->category?></td>
                            <td><?=$book->author?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>