<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
$title = 'Show User';
$this->title = $title;
?>
<div class="site-index">

    <div class="text-center">

        <h1> <?= $title ?> </h1>

<!--        <h3> --><?//= Yii::$app->user->identity['username'] ?><!-- </h3>-->
<!--        <h3> --><?php //print_r(Yii::$app->user->identity['username']) ?><!-- </h3>-->
        <h3> <?php print_r(Yii::$app->user->identity) ?> </h3>

    </div>

</div>
