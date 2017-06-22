<?php
$ch = curl_init();
curl_setopt(  $ch,   CURLOPT_URL,  "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=009D");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch); curl_close($ch);
$data_tab = str_split($data,33);



for($i=0, $size=count($data_tab);$i<$size; $i++) {
    ?>
    <tr>

    <?php
    $trame = $data_tab[$i];
    ?>
    <th>
        <?php

        list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =  sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
        echo("$day/$month/$year  $hour:$min:$sec");?>
    </th>
    <th><?php
        echo ("$v")
        ?></th>
    <th><?php

        echo "Salon";
        ?>
    </th></tr><?php

}








