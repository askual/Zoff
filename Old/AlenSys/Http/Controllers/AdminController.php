<?php

namespace Modules\AlenSys\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AlenSys\Entities\Member;

class AdminController extends Controller
{
    public function payment(){
        return view('alensys::admin.payment');
    }
    public function members(){
        return view('alensys::admin.members',[
            'members' => Member::all()
        ]);
    }
    public function members_add(Request $request){
        Member::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'sex' => $request['sex']
        ]);
        return redirect()->back();
    }
}