<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Input, Validator;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isValid($data)
    {
        $rules = [
            'name' => 'required|max:250',
            'email' => 'email|unique:mysql.users'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            return true;
        }
        $this->errors = $validator->errors();
        return false;
    }


    public static function getData()
    {
        $query = User::query();      
        $query->select('users.*');        
        if (Input::has("nombre_usuario")) {
            $query->where('users.name', 'like', "%" . Input::get("nombre_usuario") . "%");
        }
        $query -> orderby('users.created_at', 'DESC');
        return $query->paginate();
    }
}
