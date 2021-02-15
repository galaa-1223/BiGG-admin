<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\Helpers;

class StudentsController extends Controller
{
    use Helpers;
    
    public function index()
    {
        $pageTitle = 'Оюутан';
        $pageName = 'students';

        $activeMenu = $this->activeMenu($pageName);

        return view('admin/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }

    public function add()
    {
        $pageTitle = 'Оюутан нэмэх';
        $pageName = 'students';

        $activeMenu = $this->activeMenu($pageName);

        return view('admin/pages/'.$pageName.'/add', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }
}
