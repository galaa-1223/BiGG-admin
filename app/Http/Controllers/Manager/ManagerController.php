<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

    public function dashboard()
    {
        $pageTitle = 'Хянах самбар';
        $pageName = 'dashboard';

        $activeMenu = activeMenu($pageName);

        return view('manager/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }
}