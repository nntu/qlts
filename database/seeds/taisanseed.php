<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;


class taisanseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        //
        $data = Excel::load('database/seeds/taisan.xlsx', function($reader) {
            
               
        })->get();
        if(!empty($data) && $data->count()){
         // reader methods
         foreach ($data as $key => $valueS) {
                        foreach($valueS as $value){
                           // dd($value);
                                $insert[] = ['mats' => $value->mats,
                                 'tents' => $value->tents,
                                 'ngayduavaosd' => $value->ngaysd,
                                 'maphong' => $value->maphong,
                                 'maloaits' => $value->maloai,
                                 'Serrial' => $value->serial == null ? "" : $value->serial
                                ];
            
                            }
                            
                            if(!empty($insert)){
            
                                DB::table('tai_sans')->insert($insert);
            
                                dd('Insert Record successfully.');
            
                            }
                        }
        
        }
    }
}
