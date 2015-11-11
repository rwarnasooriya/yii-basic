<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class TaskForm extends Model
{
    public $taskcode;
    public $taskname;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['taskcode', 'taskname'], 'required'],
        ];
    }


}
