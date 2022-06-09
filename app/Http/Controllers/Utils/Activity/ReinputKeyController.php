<?php

namespace App\Http\Controllers\Utils\Activity;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use GuzzleHttp\Client;

class ReinputKeyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Reinput key.
     *
     * @param $code
     * @return void
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index($code)
    {

    }
}
