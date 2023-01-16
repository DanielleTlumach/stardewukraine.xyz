<!DOCTYPE html>
<html>
    <head>
        <title>Таблиця лідерів</title>
        <meta charset="utf-8">
        <link rel="icon" href="assets/cojiro.png" type="image/png">
        <link rel="stylesheet" href="css/base.css" type="text/css">
        <link rel="stylesheet" href="css/leaderboard.css" type="text/css">
        <link rel="stylesheet" href="css/tabs.css" type="text/css">

        <meta property="og:title" content="Табліця лідерів Stardew Valley Україна" />
        <meta property="og:url" content="https://stardew_ukraine.chat/leaderboard.php" />
        <meta property="og:image" content="assets/cojiro.png" />
        <meta property="og:description" content="Перегляньте найактивніших учасників сервера Stardew Valley Україна" />
    </head>
    <body>
        <header>
            <h1>Таблиця лідерів Stardew Valley Україна</h1>
        </header>
        <main>
            <?php
                include 'db.php';
            ?>
            <div class="tab">
                <button class="tabbtn" id="monthlybtn" onclick="opentab(event, 'monthly')">Цього місяця</button>
                <button class="tabbtn" id="alltimebtn" onclick="opentab(event, 'alltime')">Увесь час</button>
            </div>
            <div id="monthly" class="tabcontent">
                <ul>
                    <?php
                        populate_leaderboard(true);
                    ?>
                </ul>
            </div>
            <div id="alltime" class="tabcontent">
                <ul>
                    <?php
                        populate_leaderboard(false);
                    ?>
                </ul>
            </div>
        </main>
    </body>
    <script src="js/tabs.js"></script>
</html>