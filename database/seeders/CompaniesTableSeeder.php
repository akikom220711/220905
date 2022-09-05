<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'company_name' => '株式会社aaa',
            'head_name' => '佐藤　太郎',
            'tel' => '000-0000-0000',
            'email' => 'sato@example.com',
            'status_id' => '1',
            'user_id' =>'5'
        ];
        Company::create($param);

        $param = [
            'company_name' => '株式会社ccc',
            'head_name' => '佐藤　次郎',
            'tel' => '000-0000-0000',
            'email' => 'sato@example.com',
            'status_id' => '2',
            'user_id' =>'5'
        ];
        Company::create($param);

        $param = [
            'company_name' => '株式会社ddd',
            'head_name' => '佐藤　三郎',
            'tel' => '000-0000-0000',
            'email' => 'sato@example.com',
            'status_id' => '3',
            'user_id' =>'5'
        ];
        Company::create($param);

        $param = [
            'company_name' => '株式会社eee',
            'head_name' => '佐藤　史郎',
            'tel' => '000-0000-0000',
            'email' => 'sato@example.com',
            'status_id' => '4',
            'user_id' =>'5'
        ];
        Company::create($param);

        $param = [
            'company_name' => '株式会社fff',
            'head_name' => '佐藤　五郎',
            'tel' => '000-0000-0000',
            'email' => 'sato@example.com',
            'status_id' => '5',
            'user_id' =>'5'
        ];
        Company::create($param);

        $param = [
            'company_name' => '株式会社bbb',
            'head_name' => '鈴木　花子',
            'tel' => '000-0000-1111',
            'email' => 'suzuki@example.com',
            'status_id' => '1',
            'user_id' => '6'
        ];
        Company::create($param);

                $param = [
            'company_name' => '株式会社jjj',
            'head_name' => '鈴木　京子',
            'tel' => '000-0000-1111',
            'email' => 'suzuki@example.com',
            'status_id' => '2',
            'user_id' => '6'
        ];
        Company::create($param);

                $param = [
            'company_name' => '株式会社kkk',
            'head_name' => '鈴木　聡子',
            'tel' => '000-0000-1111',
            'email' => 'suzuki@example.com',
            'status_id' => '3',
            'user_id' => '6'
        ];
        Company::create($param);

                $param = [
            'company_name' => '株式会社iii',
            'head_name' => '鈴木　裕子',
            'tel' => '000-0000-1111',
            'email' => 'suzuki@example.com',
            'status_id' => '4',
            'user_id' => '6'
        ];
        Company::create($param);

                $param = [
            'company_name' => '株式会社yyy',
            'head_name' => '鈴木　ひろ子',
            'tel' => '000-0000-1111',
            'email' => 'suzuki@example.com',
            'status_id' => '5',
            'user_id' => '6'
        ];
        Company::create($param);
    }
}
