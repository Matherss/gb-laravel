<?php

namespace App\Models;


class Categories
{
    private array $categories = [
        [
            'id' => 1,
            'name' => 'Спорт',
        ],
        [
            'id' => 2,
            'name' => 'Политика',
        ],
        [
            'id' => 3,
            'name' => 'Автомобили',
        ],
        [
            'id' => 4,
            'name' => 'Кино',
        ],
        [
            'id' => 5,
            'name' => 'Музыка',
        ],
    ];
    public function getCategories() {
        return $this->categories;
    }
    public function getNewsByCategory($id, $news): ?array {
        
        $data = [];

        foreach ($news->getNews() as $item) {
            if($item['category'] == $id)
            $data[] = $item;
        }
        return $data;
        
    }
}