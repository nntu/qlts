<?php

use Illuminate\Database\Seeder;

class NhomTSSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $data = Excel::load(
            'database/seeds/nhomts.xlsx', function ($reader) {
        }
        )->get();
        if (!empty($data) && $data->count()) {
            // reader methods
            foreach ($data as $key => $valueS) {
                foreach ($valueS as $value) {
                    // dd($value);
                    $insert[] = ['MaNhomTS' => $value->mants,
                        'TenNhomTS' => $value->tennts
                    ];
                }

                if (!empty($insert)) {
                    DB::table('nhom_ts')->insert($insert);

                    dd('Insert Record successfully.');
                }
            }
        }
    }
}
