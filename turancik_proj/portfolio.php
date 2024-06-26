<?php
include_once("partials/header.php");
require_once("classes/Database.php");
require_once("classes/Portfolio.php");
$db = new Database();
$conn = $db->getConnection();
?>

<link rel="stylesheet" href="css/newstyle.css">
<main>

    <a href="create.php" class="plus-button-link">+</a>
    <section class="slides-container" style="display: flex; margin-left: 150px;">

        <?php
        $o = new Portfolio($conn);
        $o->read('oo', 'slides-container');
        ?>
        <!-- <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka1.jpeg" alt="Obrázok 1" style="width: 240px; height: 350px;">
        </div>
        <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka2.jpg" alt="Obrázok 2" style="width: 240px; height: 350px;">
        </div> -->
        <!-- <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka3.jpg" alt="Obrázok 3" style="width: 240px; height: 350px;">
        </div>-->
        <!-- <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka4.jpg" alt="Obrázok 4" style="width: 240px; height: 350px;">
        </div> -->
    </section>

    <section class="slides-container2" style="display: flex; margin-left: 150px;">
        <?php
        $o2 = new Portfolio($conn);
        $o2->read('kk', 'slides-container2');

        ?>
        <!-- <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka5.jpg" alt="Obrázok 5" style="width: 240px; height: 350px;">
        </div>
        <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka6.jpg" alt="Obrázok 6" style="width: 240px; height: 350px;">
        </div>
        <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka7.jpg" alt="Obrázok 7" style="width: 240px; height: 350px;">
        </div> -->
        <!-- <div class="slide" style="flex: 1 0 10%; margin: 1%;">
            <img src="img/fotka8.jpg" alt="Obrázok 8" style="width: 240px; height: 350px;">
        </div>  -->
    </section>
    <!-- <section class="slides-container" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka1.jpeg" alt="Obrázok 1" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka2.jpg" alt="Obrázok 2" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka3.jpg" alt="Obrázok 3" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka4.jpg" alt="Obrázok 4" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka5.jpg" alt="Obrázok 5" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka6.jpg" alt="Obrázok 6" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka7.jpg" alt="Obrázok 7" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka8.jpg" alt="Obrázok 8" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka9.jpg" alt="Obrázok 9" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka10.jpg" alt="Obrázok 10" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka11.jpg" alt="Obrázok 11" style="width: 240px; height: 350px;">
            </div>
            <div class="slide" style="flex: 1 0 10%; margin: 1%;">
                <img src="img/fotka12.jpg" alt="Obrázok 12" style="width: 240px; height: 350px;">
            </div>
             More slides as needed -->

</main>
<!-- <main>
        <h1>Moje portfólio</h1>
        <section class="slides-container">
            <div class="slide">
                <img src="img/fotka1.jpeg" alt="Obrázok 1">
            </div>
            <div class="slide">
                <img src="img/fotka2.jpg" alt="Obrázok 2">
            </div>
            <div class="slide">
                <img src="img/fotka3.jpg" alt="Obrázok 3">
            </div>
            <div class="slide">
                <img src="img/fotka4.jpg" alt="Obrázok 4">
            </div>
            <div class="slide">
                <img src="img/fotka5.jpg" alt="Obrázok 5">
            </div>
            <div class="slide">
                <img src="img/fotka6.jpg" alt="Obrázok 6">
            </div>
            <div class="slide">
                <img src="img/fotka7.jpg" alt="Obrázok 7">
            </div>
            <div class="slide">
                <img src="img/fotka8.jpg" alt="Obrázok 8">
            </div>
            <div class="slide">
                <img src="img/fotka9.jpg" alt="Obrázok 9">
            </div>
            <div class="slide">
                <img src="img/fotka10.jpg" alt="Obrázok 10">
            </div>
            <div class="slide">
                <img src="img/fotka11.jpg" alt="Obrázok 11">
            </div>
            <div class="slide">
                <img src="img/fotka12.jpg" alt="Obrázok 12">
            </div>

            <a id="prev" class="prev">❮</a>
            <a id="next" class="next">❯</a>
        </section>




    </main> -->

<?php
include_once("partials/footer.php");
?>