<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->

    <div class="body-content">
        <?php foreach($spec as $home):?>
        <div class="row parent">
            <a href="<?php echo \yii\helpers\Url::to(['site/detail','id'=>$home['home_id']]); ?>">
                <div class="col-lg-9 part">
                    <div class="row child">
                        <div class="col-md-3 small-img">

                            <img src="<?php echo Yii::$app->urlManager->baseUrl.'/'.$home['img'] ; ?>">

                        </div>
                        <div class="col-md-9">
                            <h4><?= $home['name']; ?></h4>
                            <h4>$<?= number_format($home['price'],3,',',','); ?></h4>
                            <p>
                                <?= "<strong>".$home['bed']."</strong> Bed" ?>
                                <span class="separate">|</span>
                            
                                <?= "<strong>".$home['bath']."</strong> Full Ba" ?>
                                <span class="separate">|</span>
                            
                                <?= Yii::$app->params['type'][$home['type']];?>
                            </p>
                            <p><?= "Size: <strong>".$home['size']."</strong> Sq Ft" ?></p>
                            <p>Broker by : <?= $home['broker']; ?></p>
                        
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php  endforeach; ?>
        <?= LinkPager::widget(['pagination'=>$page]); ?>
    </div>
</div>
