<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{




    public $id;
    public $name;
    public $imageFile;
    public $imageName;
    public $short_description;
    public $full_text;
    public $add_date;

    public function rules()
    {
        return [
            [['name', 'short_description', 'full_text', 'add_date'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile = UploadedFile;
            $this->imageFile->saveAs('/var/www/html/Yii/web/image' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

}