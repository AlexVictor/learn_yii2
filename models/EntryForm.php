<?php
/**
 * Created by PhpStorm.
 * User: Victoryk7
 * Date: 2017/8/17
 * Time: 11:53
 */

namespace app\models;
use yii\base\Model;



class EntryForm extends Model{

    public $name;
    public $email;

    public function rules()
    {
        return array(
            array(
                ['name','email'],'required'),
                ['email','email']
        );
    }
}