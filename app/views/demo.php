<?php
foreach($detail as $demo)
{
    echo "<tr>";
    echo "<td>".$demo['id']."</td>";
    echo "<td>".$demo['first_name']."</td>";
    echo "<td>".$demo['last_name']."</td>";
    echo "<td>".$demo['address']."</td>";
    echo "<td>".$demo['gender']."</td>";
    echo "<td>".$demo['from']."</td>";
    echo "<td>".$demo['to']."</td>";
    echo "<td>",$demo['contact_no']."</td>";
    echo "<td>";
    ?>
    <button onclick="window.print()">Print this page</button>
    <?php

}
