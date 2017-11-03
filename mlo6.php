
<?php 
$times = 8;
$info = array(array('title'=>'CST-300 Brain Computer Interfaces','link'=>'/mlo/6/anderson_qwar.docx','desc'=>'This paper discusses the potential impact of BCIs and their ethical ramifications on society', 'type'=>'document'),
);
$cnt = count($info);
$pg = (isset($_GET['id']) ? $_GET['id']-1 : 0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MLO 6: Ethics</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <?php include "scripts/homeNav.php"; ?>
        </nav>
        <div class="project-title ti-6">
        <h1>MLO 6: Ethics</h1>
        Student will understand the ethical impact of current and future information technologies on society; specifically, economics, education, the environment, governance, industry, health and human communication.
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