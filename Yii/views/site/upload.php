<?php

use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($news, 'news_name')->textInput() ?>
<?= $form->field($news, 'short_description')->textarea() ?>
<?= $form->field($news, 'full_text')->textarea() ?>
<?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>