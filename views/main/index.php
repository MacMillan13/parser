<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $( ".goal" ).load( "pars.php" );
    </script>
</head>
<div class="goal"></div>
<body>
<?
var_dump($count);
echo gettype($arg);
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
<!--<div class="paginatior">-->
<!--    --><?php
//        for ($i=1; $i <= $count; $i++){
//    ?>
<!--        <a href="--><?// echo URL;?><!--/getlist/--><?// echo $i?><!--">--><?// echo $i; ?><!--</a>-->
<!--    --><?//
//        }
//    ?>
<!--</div>-->
</body>
</html>