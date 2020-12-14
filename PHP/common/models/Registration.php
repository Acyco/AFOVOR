<?php
/**
 * File: Registration.php
 * User: Acyco
 * Date: 2020-12-13
 * Time: 16:56
 */

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property int $userid
 * @property string $day
 * @property string $createtime
 *
 * @property User $user
 */
class Registration extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'userid' => Yii::t('app', 'Userid'),
            'day' => Yii::t('app', 'Day'),
            'createtime' => Yii::t('app', 'Createtime'),
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (Yii::$app->user->isGuest) {
                return false;
            }
            
            //这个表只有插入 也就是只有增加没有更改的操作

            $data = $this->getTheDayRow();
            if($data) return false;
            
            $this->createtime = time();
            
            $this->day = date("Y-m-d", time());
          //  $this->userid = Yii::$app->user->getIdentity()->getId();
            return true;
            
        } else {
            return false;
        }
    }


    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userid']);
    }

    public function getTheDayRow()
    {
        $day = date("Y-m-d", time());
        $userid = Yii::$app->user->getIdentity()->getId();
        return Registration::find()->where(['userid' => $userid, 'day' => $day])->one();
    }
}
