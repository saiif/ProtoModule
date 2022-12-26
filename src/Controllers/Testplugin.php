<?php

namespace Saif\ProtoModule\Controllers;
 
class Testplugin extends \App\Controllers\BaseController
{

    public function index()
    {
        return view('\Saif\ProtoModule\Views/index');
    }
}
