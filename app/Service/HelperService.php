<?php

namespace App\Service;

use Illuminate\Support\Facades\Notification;

class HelperService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function mailManagement($notification)
    {
        $managementEmail= config('app.management_mail');
        if ($managementEmail) Notification::route('mail',$managementEmail)->notify($notification);
        else logger()->error("please set up management_mail in the .env");
    }
}
