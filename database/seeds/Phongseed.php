<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;

class Phongseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        //
        $data = Excel::load('database/seeds/phong.xlsx', function ($reader) {
        })->get();
        
        if (!empty($data) && $data->count()) {
         // reader methods
            foreach ($data as $key => $value) {
                                $insert[] = ['MaPhong' => $value->maphong, 'TenPhong' => $value->tenphong];
            }
                                        
            if (!empty($insert)) {
                DB::table('phong_bans')->insert($insert);
            
                dd('Insert Record successfully.');
            }
        }
    }
}
