    <?php
    include_once("partials/header.php");
    ?>

    <!-- <link rel="stylesheet" href="css/style3.css"> -->

    <main>
        <div class="nadpis">
            <h1>Kontakt</h1>
        </div>
        <section class="formular">
            <form id="formu" action="podakovanie.html" method="get" target="_blank">
                <input type="text" id="name" name="name" required placeholder="Meno"><br>
                <input type="text" id="surname" name="surname" required placeholder="Priezvisko"><br>
                <input type="email" id="email" name="email" required placeholder="E-mail"><br>
                <textarea id="text" name="text" placeholder="Poznámka"></textarea><br>
                <label for="check">Súhlasím so spracovaním osobných údajov</label>
                <input type="checkbox" id="check" name="check" required><br>
                <input type="submit" value="Odoslať" onclick="odoslat()">
            </form>
        </section>
    </main>

    <?php
    include_once("partials/footer.php");
    ?>