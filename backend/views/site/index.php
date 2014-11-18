<?php
use frontend\widgets\Alert;
use yii\widgets\Breadcrumbs;
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => ''];
//$this->params['breadcrumbs'][] = $this->title;
?>
<!--End Breadcrumb-->
<?= Alert::widget() ?>
<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <center><h1>Control Panel</h1></center>

        <p class="lead">This is the control panel of your site.</p>
        <p class="lead">Here you can do all the manipulations with the content of all the pages. So, be carefull!</p>
    </div>
</div>
