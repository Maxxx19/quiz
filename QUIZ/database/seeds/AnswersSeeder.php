<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [ 0 => ['Samsung','алюміній','Лісабон', 'Роберт Піл', 'Ag', 'Персі Шоу', 'Бджола колібрі', 'Продавець вживаних меблів', '1912', 'Пітер Дуранд'],
                     1 => ['1972','Том Хенкс','Джулі Ендрюс', 'Джейн Кемпіон', 'Олександр Гулд', 'Чарльз Бронсон', 'Темний лицар', 'Італія', 'Джейсон Стетхем', 'Міккі Рурк'],
                     2 => ['Поле Тропікана','Девід Бекхем','Сім', 'Італія', 'Вікторія Азаренка', 'баскетбол', 'Чотири', 'Сент-Луїс', 'Швидкий рейнджер', 'Хокей з шайбою'],
                     3 => ['Девід Р. Скотт','20мм','75,600 миль/год', '2.5 мільйона світлових років', 'Волоски 10,000', 'Еміль Берлінер', 'Дев\'ять з половиною років', '210,000,000,000', '200 млрд. років', '99%'],
                     4 => ['1964','Пітер Ні','Beach Boys', 'Рідне місто слави', 'Дуа Ліпа', 'Королева', 'Майкл Джексон', 'Джастін Бібер', 'REM', 'вчора']
        ];
        $wrong = [ 0 => ['LG','берилій','Белград', 'Beach Boys', 'Pb', 'Майкл Джексон', 'Горобець', 'Ювелір', '1635', 'Еміль Берлінер'],
                     1 => ['1816','Майкл Джексон','Девід Бекхем', 'Еміль Берлінер', 'Сент-Луїс', 'Персі Шоу', 'REM', 'Іспанія', 'Джастін Бібер', 'Майкл Джексон'],
                     2 => ['Beach Boys','Руд Гуліт','Вісім', 'Бельгія', 'Чарльз Бронсон', 'футбол', 'Сім', 'Сент-Жермен', 'Поліцейський', 'Хокей на траві'],
                     3 => ['Девід Бекхем','20см','35,200 км/год', '1.5  світлових роки', 'Волоски 100,000', 'Джастін Бібер', 'Сто років', '100,000,000,000', '100 років', '66,5%'],
                     4 => ['1950','Руд Гуліт','Bad Boys', 'Чікаго', 'Персі Шоу', 'Принцеса', 'Емінем', 'Сент-Жермен', 'Beatles', 'сьогодні']
        ];
        $wrong1 = [ 0 => ['Hyunday','срібло','Токіо', 'Вікторія Азаренка', 'Sn', 'Чарльз Бронсон', 'Бджола Майа', 'Продавець пістолетів', '2001', 'Джастін Бібер'],
                     1 => ['1988','Джастін Бібер','Королева', 'Джейсон Стетхем', 'Джейсон Стетхем', 'Швидкий рейнджер', 'Білий лицар', 'Франція', 'Сент-Луїс', 'Джастін Бібер'],
                     2 => ['Франція','Мессі','Чотири', 'Франція', 'Джейсон Стетхем', 'регбі', 'Два', 'Чікаго', 'Швидкий Боб', 'Поло'],
                     3 => ['Чарльз Бронсон','20км','55,200 миль', '5.5  років', 'Волоски 35,000', 'Майкл Джексон', 'П\'ять місяців', '320,000,000', '100 тис. років', '91%'],
                     4 => ['2015','Пітер Пен','REM', 'Рідне село', 'Джастін Бібер', 'Король', 'Beatles', 'Король', 'Prodigy', 'завтра']
        ];
        $wrong2 = [ 0 => ['Tesla','пиво','Порту', 'Девід Р. Скотт', 'Mg', 'Олександр Гулд', 'Зяблик', 'Кравець', '1899', 'Дуа Ліпа'],
                     1 => ['2005','Девід Р. Скотт','Пітер Ні', 'Олександр Гулд', 'Чарльз Бронсон', 'Дуа Ліпа', 'Еміль Берлінер', 'Непал', 'Олександр Гулд', 'Девід Р. Скотт'],
                     2 => ['Кравець','Андрій Шевченко','Два', 'Україна', 'Вікторія Азаренка', 'тенніс', 'Три', 'Орландо', 'Свідок', 'Водне поло'],
                     3 => ['Орландо','20 раз','100,00 км/год', '5 тисяч світлових років', 'Волоски 1,000', 'Кравець', 'Шість років три місяці', '500,000,000,000', '1 млрд. років', '100%'],
                     4 => ['1815','Чарльз Бронсон','Beatles', 'Місце правди', 'Джейсон Стетхем', 'Принц', 'Олександр Гулд', 'Девід Р. Скотт', 'Чарльз Бронсон', 'зараз']
        ];
        $k=0;
        $n=1;
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 10; $j++) {
        DB::table('answers')->insert([
            'true_answer' => $answers[$k][$j],
            'wrong_answer' => $wrong[$k][$j],
            'wrong_answer1' => $wrong1[$k][$j],
            'wrong_answer2' => $wrong2[$k][$j],
            'questionable_id' => $n
        ]);
        $n++;
       }
       $k++;
    }
  }
}
