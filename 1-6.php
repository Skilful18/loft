<table>
    <tbody>
        <tr>
            <?php for($y = 1; $y < 10; $y++) { ?>

                <?php echo "<tr>"."<td>" . $y * 1 . "</td>" ?>
                <?php echo "<td>" . $y * 2 . "</td>"?>
                <?php echo "<td>" . $y * 3 . "</td>"?>
                <?php echo "<td>" . $y * 4 . "</td>"?>
                <?php echo "<td>" . $y * 5 . "</td>"?>
                <?php echo "<td>" . $y * 6 . "</td>"?>
                <?php echo "<td>" . $y * 7 . "</td>"?>
                <?php echo "<td>" . $y * 8 . "</td>"?>
                <?php echo "<td>" . $y * 9 . "</td>" . "</tr>" ?>

            <?php }?>
        </tr>
     </tbody>
</table>

<br>
<br>

<table>
<tbody>

<?php

    for($y = 1; $y < 10; $y++) {
        ?>  <tr>  </tr> <?php
            for ($i = 1; $i < 10; $i++) {
        ?>  <?php ?>  <td>  <?php
                if ( (($y * $i) % 2) == 0 ) {
                    echo '(' . $y * $i . ')';
                } elseif ((($y * $i) % 2) != 0) {
                    echo '[' . $y * $i . ']';
                } else {
                    echo $y * $i;
                }
            ?> <td> <?php
        }
    }

?>
</tbody>
</table>