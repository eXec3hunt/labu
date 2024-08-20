<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS2</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
    if($_COOKIE['user']==''):
    ?>
    <?php else: ?>
    <div class="golovna">
            <H1>CS2</H1>
            <p class="p1" ><b>Counter Strike 2</b> - багатокористувацька гра в жанрі тактичного шутера від першої особи,
                розроблена компанією Valve. Є 5-ю грою в серії Counter-Strike. Valve анонсувала гру 22 березня 2023 року,
                оголосивши, що вона вийде влітку 2023 року. Компанія почала розсилати перші запрошення на обмежений тест для
                Counter-Strike 2 в ніч з 22 на 23 березня 2023 року, доступний тільки для користувачів Windows,
                доступ до нової версії гри отримали не всі гравці, а лише частина. За офіційною інформацією[1],
                компанія спиралася на кількість годин на офіційних серверах і на Trust Factor.
                Реліз гри відбувся 27 вересня 2023 року. Counter Strike 2 замінила CS:GO, яка була видалена зі Steam.</p>
            <div class="many">
                <div>
                    <p><H3>Карти:</H3>
                        <ul>
                            <li><a href="maps/Mirage.html">Mirage</a> </li>
                            <li><a href="maps/Dust2.html">Dust 2</a></li>
                            <li><a href="maps/Inferno.html">Inferno</a></li>
                            <li><a href="maps/Vertigo.html">Vertigo</a></li>
                            <li><a href="maps/Ancient.html">Ancient</a></li>
                            <li><a href="maps/Anubis.html">Anubis</a></li>
                        </ul> <br>
                        <h3>Зброя:</h3>
                        <ul>
                            <li><a href="guns/AK47.html">AK47</a> </li>
                            <li><a href="guns/M4A4.html">M4A4</a> </li>
                            <li><a href="guns/AWP.html">AWP</a></li>
                        </ul>
                    </p>
                </div>
                <div class="video">
                    <div>
                        <iframe class="video-1"  src="https://www.youtube.com/embed/c80dVYcL69E?si=aXOqiFh0wkI4Umvs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div ><button ></button><button></button><button></button><button></button><button></button><button></button><button ></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button></div><br>
                    <button ></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button id="openModalBtn"></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button></div><br>
            </div >
            <div id="myModal" class="modal">

                <!-- Вміст модального вікна -->
                <div class="modal-content">
                    <div>А ю крейзі?</div>
                    <div><button class="close">x</button></div>
                </div>

            </div>
            <div class="myframe">
                <button class="back" onclick="document.location='reg.php'">Реєстрація</button>
            </div>
        </div>
        <script src="java.js"></script>
    <?php endif;?>
</body>
</html>