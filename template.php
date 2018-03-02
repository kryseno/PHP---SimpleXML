// for cleaner, readable code. instead of writing everything out on php file

<h1>$title</h1>
<section>
    <?php
        forEach($array as $key=>$value){
            ?>
            <div><?=$value['name'];?></div><div><?=$value['occupation'];?></div>
            <?php
        }
?>
</section>
<footer>$someData</footer>