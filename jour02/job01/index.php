<table>

<?php 

    $i = 0;

    while ( $i <= 1337)
    {
        if ($i == 42)
            echo "<b><u>" . $i . "</b></u><br />";
        else
            echo $i . "<br />";
        $i++;
    }

?>

</table>