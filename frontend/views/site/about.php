<div class="container">
<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
echo Breadcrumbs::widget([
    'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
    'links' => [
        [
            'label' => 'Post Category',
            'url' => ['post-category/view', 'id' => 10],
            'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
        'Edit',
    ],
]);
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
</div>
