<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $hidden = array('password', 'remember_token');
    protected $primaryKey = 'user_id';

    
    /**
     * Add new user function. Probably useless. Can be done with static call of User class.
     * @param type $name
     * @param type $password
     */
    public function addUser($name, $password)
    {
        $this->name = $name;
        $this->password = Hash::make($password);
        $this->save();
    }
    
    /**
     * Relationship - each user has many posts.
     * @return type
     */
    public function posts(){
        return $this->hasMany('Posts', 'user_id');

    }

}
