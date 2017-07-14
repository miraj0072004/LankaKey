<?php
include('includes/header.inc.php'); 
?>
<div class="row">
<?php

if (isset($_GET['article_id']))
{
    $article_id=$_GET['article_id'];
    if ($article_id==1)
    {
        $title="Article One";
    }
    else if ($article_id==2)
    {
        $title="Article Two";
    }
    else if ($article_id==3)
    {
        $title="Article Three";
    }
        
}
?>

<div id="article" class="col-xs-12">
    
    <?php echo "<h2><u>$title</u></h2>";?>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates necessitatibus, quibusdam voluptas natus vel dolor suscipit veritatis non nam hic, quam ipsa similique sed harum aliquid eos dolore id ipsam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum atque error illum, laboriosam cupiditate sit voluptatum nihil culpa maxime eaque praesentium odio, similique labore recusandae sint dignissimos exercitationem quasi accusantium?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus itaque assumenda in ducimus fugiat voluptatem provident consequuntur tempora ab vero, rem illo voluptate, molestiae sapiente distinctio est harum! Officia, tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem illo eius, quae, enim odit nisi suscipit totam consequuntur, nobis voluptatem ipsa quod quia odio doloribus blanditiis doloremque repellendus ducimus. Expedita!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ut voluptates ducimus ea, soluta totam debitis aut quo possimus illo quam earum iusto tempore, odit recusandae fuga delectus dolores pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere quod quasi harum dolorem minima id rerum esse ipsa suscipit at aliquid ipsam, assumenda et ab, possimus, officia ad, quo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum excepturi nemo neque sunt dolore nostrum a aspernatur rem, saepe corrupti, qui nulla. Nesciunt similique enim atque aliquid asperiores, voluptas odit.</p>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates necessitatibus, quibusdam voluptas natus vel dolor suscipit veritatis non nam hic, quam ipsa similique sed harum aliquid eos dolore id ipsam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum atque error illum, laboriosam cupiditate sit voluptatum nihil culpa maxime eaque praesentium odio, similique labore recusandae sint dignissimos exercitationem quasi accusantium?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus itaque assumenda in ducimus fugiat voluptatem provident consequuntur tempora ab vero, rem illo voluptate, molestiae sapiente distinctio est harum! Officia, tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem illo eius, quae, enim odit nisi suscipit totam consequuntur, nobis voluptatem ipsa quod quia odio doloribus blanditiis doloremque repellendus ducimus. Expedita!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ut voluptates ducimus ea, soluta totam debitis aut quo possimus illo quam earum iusto tempore, odit recusandae fuga delectus dolores pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facere quod quasi harum dolorem minima id rerum esse ipsa suscipit at aliquid ipsam, assumenda et ab, possimus, officia ad, quo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum excepturi nemo neque sunt dolore nostrum a aspernatur rem, saepe corrupti, qui nulla. Nesciunt similique enim atque aliquid asperiores, voluptas odit.</p>
</div>
</div>
<?php
include('includes/footer.inc.php'); 
?>