<?php

use Illuminate\Database\Seeder;
use App\Models\Works;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->truncate();

        Works::insert([
            [
                'title'      => 'Audio',
                'description' => 'Описание',
                'preview_img' => 'user5821fe8bd8dc19.95109455.jpg',
                'img' => 'user5821e66eefc194.12641625.jpg'
            ],
            [
                'title'      => 'Плацдарм',
                'description' => 'Описание',
                'preview_img' => 'user5821fdf7774749.04592012.jpg',
                'img' => 'user5821e741e5bf01.60342964.jpg'
            ],
            [
                'title'      => 'Мед. учет',
                'description' => 'ИС медицинского учета разработана для выполнения следующих задач:<ul><li>внесения и хранения информации о жителях  медицинского участка</li><li>составления списков жителей по отдельным улицам</li><li>контроля своевременного прохождения флюорографии</li></ul> Для разработки системы использованы следующие технологии:<ul> <li>PHP Framework <strong>Yii2</strong></li><li>БД - <strong>MySQL</strong></li></ul>',
                'preview_img' => 'user5821f9ba6a46f9.53134588.jpg',
                'img' => 'user5821e7a3d4e9a1.48820050.jpg'
            ],
            [
                'title'      => 'Incube',
                'description' => 'Описание',
                'preview_img' => 'user5821f83a965588.05414467.jpg',
                'img' => 'user5821e7dbaa6044.94678107.jpg'
            ],
            [
                'title'      => 'SutkiHouse',
                'description' => 'Описание',
                'preview_img' => 'user5822109d207eb3.48516835.jpg',
                'img' => 'user5821e8076afbc8.57259228.jpg'
            ],
        ]);
    }
}
