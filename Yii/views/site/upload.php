<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'imageFile')->fileInput() ?>
<?= $form->field($model, 'short_description')->textarea() ?>
<?= $form->field($model, 'full_text')->textarea() ?>


    <button>Submit</button>

<?php ActiveForm::end() ?>