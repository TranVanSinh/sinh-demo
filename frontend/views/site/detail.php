<?php
use yii\helpers\Html;

$this->title = 'Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row parent">
    <div class="col-lg-8">
        <div class="row child">
            <div class="col-lg-6">
                <?= "<h2>".$model->name."</h2>"; ?>
                <?php echo  $model->address; ?>
            </div>
            <div class="col-lg-6 right">
                <?= "<h3><strong>$ ".$model->price."</strong></h3>"; ?> 
                <?= "<h4><strong>Broker: </strong></h4>".$model->broker."</strong></h3>"; ?> 
            </div>
        </div>
        <div class="row child">
            <div class="col-lg-12 big-img">
                <img class="col-lg-12" src="<?php echo Yii::$app->urlManager->baseUrl."/".$model->img; ?>"/>

            </div>
        </div>
        <div class="row child">
            <hr>
            <h2>Detail Desription</h2>
            <p><?php echo $model->detail;?></p>
            <hr>
            <h2>Other Information</h2>
            <div class="row child">
                <ul class="col-lg-6">
                    <li>Bed:<?php echo " ".$model->bed;?></li>
                    <li>Bath:<?php echo " ".$model->bath;?></li>
                    <li>Size:<?php echo " ".$model->size." Sq Ft";?></li>
                </ul>
                <ul class="col-lg-6">
                    <li>Type:<?= " ".Yii::$app->params['type'][$model->type];?></li>
                    <li>Status:<?= " ".Yii::$app->params['status'][$model->status];?></li>                  
                </ul>
            </div>
        </div>
    </div>
</div>




