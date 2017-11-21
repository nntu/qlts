<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiSan extends Model
{
    // thông tin tài sản
   // CREATE TABLE "tai_sans" ("MaTS" varchar not null, "TenTS" varchar not null,
    // "MaLoaiTS" varchar not null, "NgayDuaVaoSD" datetime not null,
    //"MaPhong" varchar not null, "Serrial" varchar not null,
   //"created_at" datetime null, "updated_at" datetime null, primary key ("MaTS"))


    protected $table = 'PhongBan';

    protected $fillable = ['MaTS', 'TenTS', 'MaLoaiTS', 'NgayDuaVaoSD', 'Serrial'];
}
