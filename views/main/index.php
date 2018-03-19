<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?
    foreach ($arg as $article) {

        $pq = pq($article);

        $title_a = $pq->find('.gs-c-promo-heading')->attr('href');

        $time = $pq->find('.gs-o-bullet__text')->text();

        $country = $pq->find('.gs-c-section-link')->text() . '<br>';

        $img = $pq->find('.gs-o-responsive-image img')->attr('src');

        echo '<h3><a href="http://www.bbc.com' . $title_a . '">';

        echo $pq->find('.gs-c-promo-heading__title')->text() . '<br>';

        echo '</a></h3>';

        echo $pq->find('.gs-c-promo-summary')->text() . '<br>';

        echo $time;

        if (!(empty($time))){

            echo ' | ';
        }

        echo $country;

        if(preg_match('/\.(jpg|png|jpeg)$/', $img)) {
            ?>
            <img src="<?=$img; ?>">
            <?
        }
        echo '<br><br>';
    }
?>
</body>
</html>