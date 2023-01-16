<!DOCTYPE html>
<html>
    <head>
        <title>Користувацькі команди</title>
        <meta charset="utf-8">
        <link rel="icon" href="assets/cojiro.png" type="image/png">
        <link rel="stylesheet" href="css/base.css" type="text/css">
        <link rel="stylesheet" href="css/commands.css" type="text/css">
    </head>
    <body>
        <header>
            <h1>Користувацькі команди Discord серверу</h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>Команда</th>
                    <th>Відповідь</th>
                </tr>
                <?php
                    include 'db.php';
                    populate_cmd_tbl();
                ?>
            </table>
        </main>
    </body>
</html>