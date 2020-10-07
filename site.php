<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="site.php" method="get">
            Color: <input type="text" name="color">
            <br>
            Plural Noun: <input type="text" name="pluralNoun">
            <br>
            Character: <input type="text" name="character">
            <br>
            <input type="submit">
        </form>

        <?php
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $character = $_GET["character"];

            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $character <br>"; 
        ?>
    </body>
</html>
