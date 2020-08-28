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
                    <div class="input_area">
                    <ul>
                        <div class="input_text">
                        <li><div><label for="name"><?php echo $form->getName()?></label><input id="name" type="text" name="age"/></div></li>
                        </div>
                        <div class="input_select">
                        <li><label><?php echo $form->getAge() ?></label>
                        <select name="age"><?php for ($i = 1; $i <= 100; $i++) {?><option value="<?php echo $i ?>"><?php echo $i ?> </option><?php }?></select>
                        <label for="man"><?php echo $form->getSex(0)?></label>
                        <input id="man" type="radio" name="sex"/>
                        <label for="woman"><?php echo $form->getSex(1)?></label>
                        <input id="woman" type="radio" name="sex"/></li>
                        </div>
                        <div class="input_textarea"><li><textarea name="comment"></textarea></li></div>
                        <div class="input_query"><li><input type="submit" value="問い合わせ"></li></div>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>