<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $email
 * @property string $login
 * @property string $password
 * @property int $admin
 */
class RegisterForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public $rulesite;
    public $repassword;
    public function rules()
    {
        return [
            [['name', 'surname', 'email', 'login', 'password'], 'required', 'message' => 'Обязательно для заполнения'],
            [['admin'], 'integer'],
            [['name', 'surname', 'patronymic'], 'match', 'pattern' => '/^[a-z]\w*$/i','message' => 'Только английские буквы и цифры'],
            [['name', 'surname', 'patronymic', 'email', 'login', 'password'], 'string', 'max' => 50, 'message' => 'Не длиннее 50 символов'],
            [['password', 'repassword'], 'string','min' => 6, 'message' => 'Минимально 6 символов'],
            [['repassword'], 'compare', 'compareAttribute' => 'password', 'message' => 'Пароль не совпадает' ],
            [['rulesite'], 'compare', 'compareValue' => true,  'message' => 'Обязательное условие'],
            [['email'], 'unique', 'message' => 'Этот адрес электронной почты уже занят'],
            [['email'], 'email', 'message' => 'Введите корректный email'],
            [['login'], 'unique', 'message' => 'Этот логин уже занят'],
            ['login', 'match', 'pattern' => '/^[a-z]\w*$/i','message' => 'Только английские буквы и цифры'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'email' => 'Email',
            'login' => 'Логин',
            'password' => 'Пароль',
            'admin' => 'Админ?',
            'rulesite' => 'Согласен с правилами сервиса',
            'repassword' => 'Подтверждение пароля',
        ];
    }
}
