<?php

namespace App\Controllers;

class BlogController extends BaseController
{
    public function index()
    {
        $data['author'] = "Imran Hasan";
        $data['books'] = ['book_one', 'book_two', 'book_three', 'book_four', 'book_five'];


        return view('blog', $data);
    }

    public function bestBook($bb)
    {
        return "Today's Best book is: <b> $bb</b>";
    }

    public function test()
    {
        return view('index');
    }
}
