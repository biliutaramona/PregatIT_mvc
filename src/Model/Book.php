<?php

namespace App\Model;

class Book{
    public function getByUserId(int $userId)
    {
        // TODO: get this from DB for the specified user id
        return [
            [
                'title' => 'Norwegian Wood',
                'author' => 'Haruki Murakami',
                'description' => 'This some random text'
            ],
            [
                'title' => 'The Humans',
                'author' => 'Matt Haig',
                'description' => 'This some random text'
            ],
            [
                'title' => 'Piranesi',
                'author' => 'Susanna Clarke',
                'description' => 'This some random text'
            ]
        ];
    }
}