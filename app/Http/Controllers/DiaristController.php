<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaristRequest;
use Illuminate\Validation\Validator;
use App\Models\Diarist;
use App\Services\ZipCode;

class DiaristController extends Controller
{   
    protected ZipCode $zipcode;

    public function __construct(ZipCode $zipCode) {

        $this->zipCode = $zipCode;
    }
    public function index() {

        $diarists = Diarist::all();
        
        return view('index', compact('diarists'));
    }

    public function create() {

        return view('create');
    }

    public function store(DiaristRequest $request)  {
        
        $data = $request->all();

        if($request->hasFile('user_photo')) {

            $data['user_photo'] = $request->user_photo->store('public');
            $data['cpf'] = str_replace(['.', '-'], '', $request->cpf);
            $data['phone'] = str_replace(['( )',' ', '-'], '', $request->phone);
            $data['cep'] = str_replace('-', '', $request->cep);
            $data['code_ibge'] = $this->zipCode->search($data['cep'])['ibge'];

            Diarist::create($data);

            return redirect()->route('diarists.index');
        }
    }

    public function edit(int $id) {

        $diarist = Diarist::findOrFail($id);

        return view('edit', compact('diarist'));
        
    }

    public function update(DiaristRequest $request, int $id) {

        $diarist = Diarist::findOrFail($id);

        $data = $request->all();

        if($request->hasFile('user_photo')) {

            $data['user_photo'] = $request->user_photo->store('public');
            $data['code_ibge'] = $this->zipCode->search($data['cep'])['ibge'];
            
            $diarist->update($data);

            return redirect()->route('diarists.index');
        }
    }

   public function destroy(int $id) {

    $diarist = Diarist::FindOrFail($id);

    $diarist->delete($id);

    // Storage::delete($diarist->user_photo);

    return redirect()->route('diarists.index');

   }
}
