<?php 
    $exList = array(); 
    for ($i=1;$i<=$cnt;++$i) {
        array_push($exList,$i);
    }
    $sc = 1;
?>
<ul>
<?php foreach($exList as $e) { ?>
    <li class="s-<?=$sc?> ex-nav-li">
        <a href='<?=$_SERVER["PHP_SELF"]?>?id=<?=$e?>'> 
            <?=$e?></a>
    </li>
<?php 
$sc +=$times;
} ?>
</ul>