<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id
 * @property integer $nrp
 * @property string $nama
 * @property string $jenis_kelamin
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nrp'], 'integer'],
            [['nama'], 'string', 'max' => 30],
            [['jenis_kelamin'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }
}
