<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlaw extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'crime',
        'hint',
        'reward',
        'description',
        'deadline',
        'gang',
        'img'
    ];

    public function user(){
        return $this->BelongsToMany(User::class);
        

    }
}
