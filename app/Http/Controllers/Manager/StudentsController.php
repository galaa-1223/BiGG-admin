<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    
    public function index()
    {
        $pageTitle = 'Оюутан';
        $pageName = 'students';

        $activeMenu = activeMenu($pageName);

        return view('manager/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }

    public function add()
    {
        $pageTitle = 'Оюутан нэмэх';
        $pageName = 'students';

        $activeMenu = activeMenu($pageName);

        return view('manager/pages/'.$pageName.'/add', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }
}
