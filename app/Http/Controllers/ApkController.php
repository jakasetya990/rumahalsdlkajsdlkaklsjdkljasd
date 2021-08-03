<?php

namespace App\Http\Controllers;

use App\Models\ApkList;

use Illuminate\Http\Request;


class ApkController extends Controller
{
    public function add()
    {

        return view('apk.add');
    }

    public function edit($id)
    {
        $data = ApkList::find($id);
        return view('apk.add', ['data' => $data, 'action' => 'edit', 'idData' => $id]);
    }
    public function doEdit($id, Request $request)
    {
        // return $request;
        $data = ApkList::find($id);
        $data->update($request->except('_token', 'id'));
        try {
            $data->save();
            return redirect(route('dash.index'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function doAdd(Request $request)
    {
        $data = $request->except('_token');
        // add new data
        $add = new ApkList(['id' => randomId()]);
        $add->fill($data);
        try {
            $add->save();
            return redirect(route('dash.index'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
