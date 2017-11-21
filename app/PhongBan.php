<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    //

    protected $table = 'Phong_Bans';
    
    protected $fillable = ['MaPhong', 'TenPhong']; 
}
