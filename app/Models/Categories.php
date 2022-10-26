<?php

namespace App\Models;

use App\Models\News;

class Categories
{
    private static $categories = [
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
    public static function getCategories() {
        return static::$categories;
    }
    public static function getNewsByCategory($id): ?array {
        
        $allNews = News::getNews();
        $data = [];

        foreach ($allNews as $item) {
            if($item['category'] == $id)
            $data[] = $item;
        }
        return $data;

        
        return null;
    }
}