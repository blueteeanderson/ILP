<?php 
$times = 8;
$info = array(array('title'=>"MPC CSIS11 LC-3 ALU with Memory",'link'=>'/mlo/5/lc3_alu_memory.gif','desc'=>'For this project Logicsm was used to create the logic circuits to form the ALU and memory of an LC-3 computer. ', 'type'=>'image'));
$cnt = count($info);
$pg = (isset($_GET['id']) ? $_GET['id']-1 : 0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MLO 5: Computing & Networking</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <?php include "scripts/homeNav.php"; ?>
        </nav>
        <div class="project-title ti-5">
        <h1>MLO 5: Computing & Networking</h1>
        Student demonstrates an understanding of the evolution of computer technology and its use in solving communication problems.
        </div>
        
        <main class="exercise">
            <div class="ex-nav">
                <?php include "scripts/ex_nav.php";?>
            </div>
            <div class="ex-content">
                <h1 class="exercise-title"><?=$info[$pg]['title']?></h1>
                <p><?=$info[$pg]['desc']?></p>
                <?php if($info[$pg]['type']!='image') { ?>
                    <a href="<?=$info[$pg]['link']?>"><?=$info[$pg]['type']?></a>
                <?php } else { ?>
                    <img src="<?=$info[$pg]['link']?>" />
                <?php } ?>
            </div>
        </main>
        <footer></footer>
    </body>
</html>