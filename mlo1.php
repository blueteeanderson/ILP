<?php 
$times = 8;
$info = array(array('title'=>"CST-436 Heuristic Evaluation Report",'link'=>'/mlo/1/catalyst_HE.docx','desc'=>'This is an in depth evaluation of the Catalyst Club\'s mobile and desktop website. 
The evaluation follows 10 common heuristics', 'type'=>'document'),
array('title'=>'CST-436 MyPalHal','link'=>'anderson_qwar.docx','desc'=>'This presentations covers the research, persona, problem statement and competetive analysis required to commence the prototype of a new mobile application idea.', 'type'=>'presentation'));
$cnt = count($info);
$pg = (isset($_GET['id']) ? $_GET['id']-1 : 0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MLO 1  Professional Communication & Development</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <?php include "scripts/homeNav.php"; ?>
        </nav>
        <div class="project-title ti-1">
        <h1>MLO 1  Professional Communication & Development</h1>
        Student will effectively communicate in an academic and professional setting via written documentation and oral presentation.
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