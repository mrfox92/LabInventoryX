<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class UserHelper {

    private const NAVIGATION = ".menu.navigation";
    private const SIDEBAR = '.menu.sidebar';

    public static function test()
    {
        return 'Hello World, this is a Helper class';
    }


    public static function navigation()
    {
        $userRole = Auth::check() ? strtolower( Auth::user()->getRoleNames()[0] ) : 'guest';

        return $userRole . UserHelper::NAVIGATION;
    }

    public static function sidebar()
    {
        $userRole = Auth::check() ? strtolower( Auth::user()->getRoleNames()[0] ) : 'guest';

        return $userRole . UserHelper::SIDEBAR;
    }



}

?>