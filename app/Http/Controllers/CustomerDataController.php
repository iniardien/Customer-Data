<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerDataRequest;
use App\Models\CustomerData;
use Illuminate\Http\Request;

class CustomerDataController extends Controller
{
    public function index()
    {
        $record = CustomerData::all();
        return view('index', compact('record'));
    }
    public function add()
    {
        return view('add');
    }
    public function add_data(CustomerDataRequest $request, CustomerData $record)
    {
        $validatedData = $request->validated();

        $record->nama = $validatedData['nama'];
        $record->alamat = $validatedData['alamat'];
        $record->no_telp = $validatedData['no_telp'];
        $record->usia = $validatedData['usia'];
        $record->berat_badan = $validatedData['berat_badan'];

        $record->save();

        return redirect()->route('index');
    }
    public function delete($id)
    {

        $record = CustomerData::find($id);
        if ($record) {
            $record->delete();
            return redirect()->route('index');
        } else {
            return redirect()->route('index');
        }

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $record = CustomerData::find($id);
        if ($record) {
            return view('edit', compact('record'));
        } else {
            return redirect()->route('index');
        }
    }
    public function edit_data($id, CustomerDataRequest $request)
    {

        $validatedData = $request->validated();
        
        $record = CustomerData::find($id);

        if ($record) {
            $record->nama = $validatedData['nama'];
            $record->alamat = $validatedData['alamat'];
            $record->no_telp = $validatedData['no_telp'];
            $record->usia = $validatedData['usia'];
            $record->berat_badan = $validatedData['berat_badan'];
            $record->save();
            return redirect()->route('index');
        } else {
            return redirect()->route('index');
        }
    }
}
