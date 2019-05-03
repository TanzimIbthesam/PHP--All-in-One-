<?php 
include 'functions.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $site['title']; ?></title>
    <?php include 'styles.php'; ?>
    <style>
    
    </style>
</head>
<body>
    <header><?php echo $site['Name'],"<br>"; ?></header>
    <nav>
    <?php foreach($nav as $page=>$label){?>
   <!-- <a href="<//?php echo $page ; ?>.html"><//?php echo $label;?> -->
   <a href="<?php echo $page.''.$site['type'] ; ?>"><?php echo $label;?>

   <?php } ?>
   
    </nav>
     <section></section>
    <footer>Copyright@<?php echo $site['Name'].'  '.$site['Copyright'],"<br>"; ?></footer>
</body>
</html>