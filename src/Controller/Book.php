<?php

namespace App\Controller;

use Core\Request;
use App\Model\Book as BookModel;
use App\Model\User;

class Book extends CoreController{

    private BookModel $book;
    private User $user;
    
    public function __construct()
    {
        $this->book = new BookModel();
        $this->user = new User();
    }
    public function index()
    {
        if (!$this->user->isLoggedIn()) {
            Request::redirect('/auth/login');
        }
        $this->view('book', ['books' => $this->book->getByUserId($this->user->getId())]);
    }
}