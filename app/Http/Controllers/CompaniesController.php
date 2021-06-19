<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\CompanyStoreData;
class CompaniesController extends Controller
{
    //
    public function addCompany()
    {
        return view('add-company');
    }
    public function saveCompany(CompanyStoreData $req)
    {
        //return vew('add-company');
        //dd($request);
        //$req->validated();
        //print_r($req->all());
        DB::table('companies')->insert([
            'name'=>$req->name,
            'email'=> $req->email,
            'website'=> $req->website
        ]);
        
return back()->with('add-company','Company added successfully');
//return back();
    }
    public function listCompany()
    {
        $company = DB::table('companies')->get();
        return view('company-list',compact('company'));
    }
    public function editCompany($id)
    {
        $company = DB::table('companies')->where('id',$id)->first();
        return view('edit-company',compact('company'));
    }
    public function updateCompany(Request $request)
    {
        $company = DB::table('companies')->where('id',$request->id)->update([ 'name'=>$request->name,
        'email'=> $request->email,
        'website'=> $request->website]);
        return back()->with('update-company','Company updated successfully');

    }
    public function deleteCompany(Request $request)
    {
        $company = DB::table('companies')->where('id',$request->id)->delete();
        return back()->with('delete-company','Company deleted successfully');

    }
}
