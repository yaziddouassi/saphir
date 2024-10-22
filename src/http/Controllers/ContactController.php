<?php

namespace Saphircrud\Saphir\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{
    // Define the name and signature of the command.
 
    public function index()
    {
        return view('saphir::contact');
    }

}