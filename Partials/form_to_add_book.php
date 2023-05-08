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
                                <select class="form-select" id="category" name="category" required>
                                    <option value="">Vyberte kategóriu</option>
                                    <?php
                                        foreach ($categories as $category) {
                                    ?>
                                            <option value="<?=$category->name?>"><?=$category->name?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
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