<?php

namespace app\models;

use yii\web\IdentityInterface;
use yii\base\Object;

class User extends Object implements IdentityInterface {

    public $id;
    public $name;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $role;

    private static $users = [
        '100' => [
            'id' => '100',
            'name' => 'Admin',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
            'role' => 3,
        ],
        '101' => [
            'id' => '101',
            'name' => 'Seller',
            'username' => 'seller',
            'password' => 'seller',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
            'role' => 2,
        ],
        '102' => [
            'id' => '102',
            'name' => 'User',
            'username' => 'user',
            'password' => 'user',
            'authKey' => 'test102key',
            'accessToken' => '102-token',
            'role' => 1,
        ],
    ];

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null) {

        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {

        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->password === $password;
    }
}
