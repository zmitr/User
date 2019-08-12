<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 12.08.2019
 * Time: 20:03
 */

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\User;
class UserComposer
{
    public function compose(View $view)
    {
        $users = User::all();
        //dd($users);
        $view->with('users', $users);

    }
}
