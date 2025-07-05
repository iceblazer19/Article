<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'content', 'status', 'created_at', 'updated_at'];

    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'status' => 'required|in_list[draft,published]'
    ];

    protected $validationMessages = [
        'title' => [
            'required' => 'Title is required',
            'min_length' => 'Title must be at least 3 characters long',
            'max_length' => 'Title cannot exceed 255 characters'
        ],
        'status' => [
            'required' => 'Status is required',
            'in_list' => 'Status must be either draft or published'
        ]
    ];
}