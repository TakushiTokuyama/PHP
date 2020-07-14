<?php

   class Hero{
       public $name;
       public $hp;
       public $mp;
       public $attack = 10;
       
       public function __construct($name, $hp, $mp){
           $this -> name = $name;
           $this -> hp = $hp;
           $this -> mp = $mp;
       }
   }
   
    $hero = new Hero($_POST["name"], $_POST["hp"], $_POST["mp"]);
   
?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <pre>名前<?php echo $hero -> name;?></pre>
            <pre>HP <?php echo $hero -> hp; ?></pre>
            <pre>MP  <?php echo $hero -> mp; ?></pre>
        </div>
        
        <div>
            <form action="index.php" method="post">
                <div>
                <label>名前</label>
                <input type="text" name="name"/>
                </div>
                <div>
                <label>HP</label>
                <input type="text" name="hp"/>
                </div>
                <div>
                <label>MP</label>
                <input type="text" name="mp"/>
                </div>
                <div>
                    <input type="submit" value="登録"/>
                </div>
            </form>
        </div>
        
        <div>
            <?php echo $_POST["attack"]; ?>
        </div>
        
        <div>
            <progress id="atb_bar" value="0" max="100"></progress>
            <button id="btn_atb_bar" type="button" value="<?php echo $hero -> attack; ?>">戦う</button>
        </div>
        
        <script type="text/javascript" src="index.js"></script>
    </body>
</html>
