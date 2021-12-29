<?php

namespace FleetCart\Http\Controllers;

use Exception;
use FleetCart\Install\App;
use FleetCart\Install\Store;
use FleetCart\Install\Database;
use FleetCart\Install\Requirement;
use Illuminate\Routing\Controller;
use FleetCart\Install\AdminAccount;
use FleetCart\Http\Requests\InstallRequest;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use FleetCart\Http\Middleware\RedirectIfInstalled;

class InstallController extends Controller
{
    public function __construct()
    {
        $this->middleware(RedirectIfInstalled::class);
    }

    public function complete()
    {
      return redirect()->route('home');
    }
}
