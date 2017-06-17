<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="/architech.css"> 
    </head>
    <body>
        <?php
        include "config.php";
        include "functions.php";
        $char = new Character;
        addCharacter($con, $sDb, $char);
        $char = readCharacter(1, $con, $sDb);
        ?>

        <div class="sheet">
            <div class="sheetTop">
            <?php echo("Character: $char->name || Player: $char->player || Chronicle: $char->chronicle <br>"
                    . "Clan: $char->clan || Bloodline: $char->bloodline || Covenant: $char->covenant <br>"
                    . "Virtue: $char->virtue || Vice: $char->vice || Concept: $char->concept<br>") ?>
            </div>
            <?php $char->int = 8; ?>
            <div class="sheetTop">
            <?php          
                    echo("------ || ----Mental---- || ----Physical---- || ----Social---- <br>");
                   echo("Power || Intelligence: ");
                   dotloop($char->int);
                   
            ?>
            </div>            
            
        </div>
    </body>
</html>