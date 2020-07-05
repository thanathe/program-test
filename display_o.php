1. 
</br>
<?php 
$n=5;
for ($i=0; $i<$n; $i++) {
    for($j=$n-$i; $j>1; $j--) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($j=0; $j<=$i; $j++) {
        echo "O";
    }
    echo "<br/>";
}
?>

2. 
<br/>
<?php 
$n = 5;
$max = $n*2-1;
for ($i = 1; $i <= $n; $i++) { 
    $o = $i*2-1;
    $space = ($max-$o)/2;
    for ($j=0; $j<$space; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($k=0; $k<$o; $k++) {
        echo "O";
    }
    echo "<br/>";
}
?>