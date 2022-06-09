<?php

namespace App\Http\Controllers;

use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Helper as HelperProvide;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function __construct()
    {
        $this->helperFunction();
    }

    public function helperFunction()
    {
        $path = base_path('app/Helpers/Helper.php');
        $pathFolder = base_path('app/Helpers');

        if ((\File::exists($path) == false) && \File::isDirectory($pathFolder) == false) {
            \File::makeDirectory($pathFolder);
            \File::copy(storage_path('app/public/helpers/Helper.php'), $path);
        } elseif ((\File::exists($path) == false) && \File::isDirectory($pathFolder) == true) {
            \File::copy(storage_path('app/public/helpers/Helper.php'), $path);
        } else {
            $exists = base_path('storage/app/helpers/helper.json');
            $existsFolder = base_path('storage/app/helpers');

            if ((\File::exists($exists) == false) && \File::isDirectory($existsFolder) == false) {
                \File::makeDirectory($existsFolder);
                \File::copy(storage_path('app/public/helpers/helper.json'), $exists);
            } elseif ((\File::exists($exists) == false) && \File::isDirectory($existsFolder) == true) {
                \File::copy(storage_path('app/public/helpers/helper.json'), $exists);
            }
        }
    }
}
