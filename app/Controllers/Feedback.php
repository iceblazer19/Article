<?php

namespace App\Controllers;

class Feedback extends BaseController
{
    protected $feedbackModel;

    public function __construct()
    {
        $this->feedbackModel = new \App\Models\FeedbackModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Feedback List',
            'feedback' => $this->feedbackModel->orderBy('created_at', 'DESC')->findAll()
        ];

        return view('feedback/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Submit Feedback'
        ];

        return view('feedback/create', $data);
    }

    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($this->feedbackModel->save($data)) {
            session()->setFlashdata('success', 'Feedback submitted successfully');
            return redirect()->to('/feedback');
        }

        return redirect()->back()->withInput()->with('errors', $this->feedbackModel->errors());
    }
}