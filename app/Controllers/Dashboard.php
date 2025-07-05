<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $articleModel;
    protected $feedbackModel;

    public function __construct()
    {
        $this->articleModel = new \App\Models\ArticleModel();
        $this->feedbackModel = new \App\Models\FeedbackModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'totalArticles' => $this->articleModel->countAll(),
            'totalFeedback' => $this->feedbackModel->countAll(),
            'recentArticles' => $this->articleModel->orderBy('created_at', 'DESC')->limit(5)->find()
        ];

        return view('dashboard', $data);
    }
}