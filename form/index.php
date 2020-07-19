<?php require_once('data.php');?>

<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" href="index.css" type="text/css" />
    </head>
    <body>
        <div class="form_area">
            <div class="form_contents">
                <?php $form = new Form();?>
                <div><h1><?php echo $form->getTitle()?></h1></div>
                <div><input type="text" name="name"/></div>
                <select name="age"><option value="1">1</option></select>
                <input type="radio" name="sex"/>
                <input type="radio" name="sex"/>
                <textarea name="comment"></textarea>
                
            </div>
        </div>
    </body>
</html>