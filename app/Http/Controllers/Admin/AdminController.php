<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Traits\Helpers;

class AdminController extends Controller
{
    use Helpers;

    public function dashboard()
    {
        $pageTitle = 'Хянах самбар';
        $pageName = 'dashboard';

        $activeMenu = $this->activeMenu($pageName);

        return view('admin/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }
}