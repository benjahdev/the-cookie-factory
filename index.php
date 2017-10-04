<?php
require 'articles.php';
require 'functions.php';
require 'inc/head.php';

// if we are not connected return to the login page
redirectToCondition('login', true);
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($articles as $id => $article) : ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="/assets/img/product-<?= $id ?>.jpeg" alt="<?= $article->getName() ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $article->getName() ?></h3>
                        <p><?= $article->getCooker() ?></p>
                        <form class="form" method="post" action="addarticle.php">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                <input type="submit" class="form-control btn-primary" value="Add to cart" />
                            </div>
                            <input type="hidden" name="add_to_cart" value="<?= $id ?>" />
                        </form>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php
require 'inc/foot.php';
?>
