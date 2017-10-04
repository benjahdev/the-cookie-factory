<?php
require  'articles.php';
require  'functions.php';
require 'inc/head.php';

// if we are not connected return to the login page
redirectToCondition('login', true);

$cart_articles = [];
$total = 0;
// Prepare $cart_articles array
foreach ($articles as $id => $article) {
    // Get the cookie value for an article $id
    $cookie_value = $_COOKIE['article_' . $id];
    if (!empty($cookie_value) && is_numeric($cookie_value)) {
        $quantity = intval($cookie_value);
        if ($quantity > 0) {
            $cart_articles[$id] = [$article, $quantity];
            // Calculate the total number of  article
            $total += $quantity;
        }
    }
}
?>
<section class="cookies container-fluid">
    <?php if ($total > 0) : ?>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Name</th>
            <th>By</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cart_articles as $id => $cart_article) : ?>
            <tr>
                <td><?= $cart_article[0]->getName() ?></td>
                <td><?= $cart_article[0]->getCooker() ?></td>
                <td><?= $cart_article[1] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-right">Total = <?= $total ?></td>
            </tr>
        </tfoot>
    </table>
    <?php else : ?>
    <p class="text-center">There is no item in your cart <?= $_SESSION['username'] ?>.</p>
    <?php endif; ?>
    <a href="index.php" class="btn btn-primary">
        <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
        Back home
    </a>
    <a href="clearcart.php" class="btn btn-danger ">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        Clear cart
    </a>
</section>
<?php require 'inc/foot.php'; ?>
