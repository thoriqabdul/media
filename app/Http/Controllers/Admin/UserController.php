<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class UserController extends BaseController
{
    public function __construct()
    {
        $this->model = User::class;
        $this->prefix = "admin.users";
        $this->routePath="user.index";
    }
}
