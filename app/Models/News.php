<?php

namespace App\Models;

class News
{
    private array $news = [
        1 => [
            'id' => 1,
            'title' => 'Даниил Медведев одержал уверенную победу на старте турнира в Вене',
            'text' => 'Чемпион US Open – 2021, бывшая первая ракетка мира российский теннисист Даниил Медведев уверенно вышел во второй круг турнира категории ATP-500 в Вене (Австрия). Для россиянина эти соревнования стали первыми после Астаны, где он получил травму в матче с Новаком Джоковичем.

            В матче первого круга Медведев (1) обыграл представителя Грузии Николоза Басилашвили со счётом 6:2, 6:2. Встреча продлилась 1 час 1 минуту. Медведев 10 раз подал навылет, допустил две двойные ошибки и реализовал четыре брейк-пойнта из четырёх. На счету Басилашвили ни одного эйса, четыре двойные ошибки и ни одного заработанного брейк-пойнта.',
            'category' => 1
        ],
        2 => [
            'id' => 2,
            'title' => '«Салават» обыграл «Ак Барс» во второй раз подряд. Шмелёв оформил дубль',
            'text' => 'В Уфе на стадионе «Уфа-Арена» закончился очередной матч Фонбет Чемпионата КХЛ сезона-2022/2023, в котором местный «Салават Юлаев» принимал казанский «Ак Барс». Встреча завершилась победой хозяев со счётом 4:1 (2:0, 1:1, 1:0).',
            'category' => 1
        ],
        3 => [
            'id' => 3,
            'title' => 'Экс-президент Молдавии Додон заявил о волне эмиграции из-за политики Санду',
            'text' => 'Под руководством президента Майи Санду в Молдавии началась самая большая волна миграции в ее истории, сообщил экс-президент Игорь Додон со ссылкой на данные Международного валютного фонда (МВФ). Он обвинил действующую власть в некомпетентности, заявив, что граждане страны уезжают от отчаяния.',
            'category' => 2
        ]
        ];
        public function getNews(): array {
            return $this->news;
        }
        public function getNewsById($id): ?array {

            if(array_key_exists($id, $this->getNews())) {
                return $this->news[$id];
            }
            return null;
        }
}