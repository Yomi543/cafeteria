<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $admin;

    public function __construct()
    {
        $user = Auth::user();
        $roles = $user->getRoleNames();
        $role = $roles[0];

        if($role == "administrador") $this->admin = true;
        else $this->admin = false;
    }

    public function render(): View
    {

        return view('layouts.app');
    }
}
