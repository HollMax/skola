<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styly.css">
    </head>
    <body>
        <?php
            $dny = array("Po", "Út", "St", "Čt", "Pá", "So", "Ne");
            $mesice = array("", "Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec");
            $month = date("n");
            if ($_GET["month"]){
                $month = $_GET["month"];}
            $year = date("Y");
            $count_days = date("t");
            $first = date("N",mktime(0, 0, 0, $month, 1, $year)) - 1;
        ?>
        <table>
        <tr>
        <td><a href="<?php $link = "kalendar.php?month=".($month - 1);echo $link;?>">&lt</a></td>
        <td colspan="5"><?php echo ($mesice[$month]." ".$year)?></td>
        <td><a href="<?php $link = "kalendar.php?month=".($month + 1);echo $link;?>">&gt</a></td>
        </tr>
        <tr class="dny">
        <?php
            foreach ($dny as $den){
                echo ("<td> $den </td>");}
            for ($last = 0; $last < $count_days; $last+=7){
                echo ("<tr>");
                for ($den = 0; $den < 7; $den++){
                    echo ("<td>");
                    if (($last + $den) >= $first && ($last + $den) <= $count_days) echo ($last + $den - $first + 1);
                    echo ("</td>");
                    }
                }
        ?>
    </body>
</html>
