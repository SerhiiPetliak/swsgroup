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
                'description' => 'Программа разработана для записи и анализа аудио с разных источников:<ul><li>микрофона</li><li>звукового файла</li></ul>Программа разработана используя следующие технологии: <ul><li>Windows forms</li></ul>',
                'preview_img' => 'user5821fe8bd8dc19.95109455.jpg',
                'img' => 'user5821e66eefc194.12641625.jpg'
            ],
            [
                'title'      => 'Плацдарм',
                'description' => 'Игра "Плацдарм" разработана используя следующие технологии: <ul> <li>Unity 3D</li> <li>Windows Forms</li> </ul>',
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
                'description' => 'Сайт открытой региональной платформы "Incube" разработан для выполнения следующих задач:<ul><li>информирования общественности о региональных проблемах</li><li>создания предложений по решению проблем</li><li>инвестирования финансов в перспективные проэкты, связанные с этим направлением</li></ul>Для разработки сайта использованы следующие технологии:<ul><li>PHP Framework <strong>Laravel 5.2</strong></li><li>БД - <strong>MySQL</strong></li></ul>',
                'preview_img' => 'user5821f83a965588.05414467.jpg',
                'img' => 'user5821e7dbaa6044.94678107.jpg'
            ],
            [
                'title'      => 'SutkiHouse',
                'description' => 'Сайт "SutkiHouse" разработан для выполнения следующих задач: <ul> <li>выбора жилья для аренды</li> <li>информации об услугах, предоставляемых компанией</li> <li>бронирования и оплаты жилья</li> </ul> Для разработки сайта использованы следующие технологии: <ul> <li>PHP Framework <strong>Yii2</strong></li><li>БД - <strong>MySQL</strong></li></ul>',
                'preview_img' => 'user5822109d207eb3.48516835.jpg',
                'img' => 'user5821e8076afbc8.57259228.jpg'
            ],
            [
                'title'      => 'T.Group',
                'description' => 'Сайт союза молодежи "T.Group" разработан для выполнения следующих задач:<ul><li>предоставления информации о деятельности союза</li><li>информировании об интерестных событиях, связанных с деятельностью союза</li><li>привлечения новых участников</li></ul>Для разработки сайта использованы следующие технологии:<ul><li><strong>Wordpress</strong> CMS</li><li><strong>Bootstrap</strong> grid</li></ul>',
                'preview_img' => 'user5822350550bf62.62455464.jpg',
                'img' => 'user5822357dc53320.77144973.jpg'
            ],
        ]);
    }
}
