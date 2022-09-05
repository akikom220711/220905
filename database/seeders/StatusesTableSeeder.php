<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'status' => 'リード顧客',
        ];
        Status::create($param);

        $param = [
            'status' => 'メール送信済み',
        ];
        Status::create($param);

        $param = [
            'status' => '日程調整済',
        ];
        Status::create($param);

        $param = [
            'status' => '商談済',
        ];
        Status::create($param);

        $param = [
            'status' => '契約済',
        ];
        Status::create($param);
    }
}
