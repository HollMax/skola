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
            echo ($year);
            for (;$month > 12;){
                $month -= 12;
                $year ++;}
            for (;$month < 1;){
                $month += 12;
                $year --;}
            echo ($year);
        ?>
        <table>
        <tr>
        <td><a href="<?php $link = "kalendar.php?month=".(/*($year - (date("n"))) * 12 + */$month - 1);echo $link;?>">&lt</a></td>
        <td colspan="5"><?php echo ($mesice[$month]." ".$year)?></td>
        <td><a href="<?php $link = "kalendar.php?month=".(($year - (date("n"))) * 12 + $month + 1);echo $link;?>">&gt</a></td>
        </tr>
        <tr class="dny">
        <?php
            foreach ($dny as $den){
                echo ("<td> $den </td>");}
            for ($last = 0; $last < $count_days; $last+=7){
                echo ("<tr>");
                for ($den = 0; $den < 7; $den++){
                    if (($last + $den) >= $first && ($last + $den) <= $count_days){
                        echo ("<td class='thismonth'>");
                        echo ($last + $den - $first + 1);
                        }
                    else{
                        echo ("<td>");
                        }
                    echo ("</td>");
                    }
                }
        ?>
    </body>
</html>
