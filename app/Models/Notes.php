<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model{
    protected $table = 'notes';
    protected $fillable=[
        'user_id','subject','description',
    ];
    
}