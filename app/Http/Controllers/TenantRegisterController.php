<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Requests\TenantRegisterRequest;

class TenantRegisterController extends Controller
{
    public function register(){

        return view('tenant_register');
    }

    public function store(TenantRegisterRequest $request){
       
        $tenant = Tenant::create($request->validated());

        $tenant->createDomain(['domain'=>$request->domain]);

        return redirect()->back();
    }
}
