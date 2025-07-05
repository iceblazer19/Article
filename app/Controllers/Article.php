<?php

namespace App\Controllers;

class Article extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new \App\Models\ArticleModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Articles List',
            'articles' => $this->articleModel->orderBy('created_at', 'DESC')->findAll()
        ];

        return view('articles/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Article'
        ];

        return view('articles/create', $data);
    }

    public function store()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($this->articleModel->save($data)) {
            session()->setFlashdata('success', 'Article created successfully');
            return redirect()->to('/articles');
        }

        return redirect()->back()->withInput()->with('errors', $this->articleModel->errors());
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Article',
            'article' => $this->articleModel->find($id)
        ];

        if (empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
        }

        return view('articles/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($this->articleModel->save($data)) {
            session()->setFlashdata('success', 'Article updated successfully');
            return redirect()->to('/articles');
        }

        return redirect()->back()->withInput()->with('errors', $this->articleModel->errors());
    }

    public function delete($id)
    {
        if ($this->articleModel->delete($id)) {
            session()->setFlashdata('success', 'Article deleted successfully');
        }

        return redirect()->to('/articles');
    }
}