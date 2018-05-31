<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

use Laravel\Cashier\BillableInterface;
use App\SocialProvider;

use App\Plans;

class User extends Authenticatable
{
    public $timestamps = false;
    
    use Billable;

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider_id', 'provider'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*

    function socialProviders()
    {
        return $this->hasMany(SocialProvider::class);
    }
    */

    public function is_admin()
    {
        if($this->admin)
        {
            return true;
        }
        return false;
    }

    public function getUserForWebsite(){
        return $this->hasMany('Plans');   
    }
}
