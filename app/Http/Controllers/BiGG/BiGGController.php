<?php

namespace App\Http\Controllers\BiGG;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiGGController extends Controller
{

    public function dashboard()
    {
        $pageTitle = 'Хянах самбар';
        $pageName = 'dashboard';

        $activeMenu = activeMenu($pageName);

        return view('bigg/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName,
            'user' => Auth::guard('bigg')->user()
        ]);
    }
}