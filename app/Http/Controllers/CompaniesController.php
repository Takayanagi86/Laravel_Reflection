<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Companies;

class CompaniesController extends Controller
{
    public function index(){

        $companies = Companies::all();

        return view('companies.index', [
            'companies' => $companies,
        ]);
    }

    public function show($id){

        $companies = Companies::findOrFail($id);
        return view('companies.show', [
            'companies' => $companies,
        ]);
    }

    public function create(){
        return view('companies.create');
    }

    public function store(Request $request){

        $logo = $request->file('logo');
        $extension = $logo->getClientOriginalExtension();
        Storage::disk('public')->put($logo->getFilename().'.'.$extension, File::get($logo));

        $company = new Companies();
        
        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');
        $company->logo = $logo->getFilename().'.'.$extension;

        $company->save();

        return redirect('/companies')->with('mssg', 'The new Company has been added.');
    }
    
    public function edit($id){
        $companies = Companies::findOrFail($id);
    
        return view('companies.edit', [
            'companies' => $companies,
        ]);
    }

    public function update($id, Request $request){
        
        $company = Companies::findOrFail($id);

        $logo = $request->file('logo');
        $extension = $logo->getClientOriginalExtension();
        Storage::disk('public')->put($logo->getFilename().'.'.$extension, File::get($logo));

        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');
        $company->logo = $logo->getFilename().'.'.$extension;
        
        $company->update();

        return redirect('/companies')->with('mssg', 'Company details have been updated.');
    }
    public function destroy($id){
        $company = Companies::findOrFail($id);
        $company->delete();

        return redirect('/companies')->with('mssg', 'The Company has been deleted.');
    }
}
