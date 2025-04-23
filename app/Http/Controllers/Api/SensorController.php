<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = sensor::orderBy('name','asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataSensor = new sensor;

        $rules =
        [
            'name' =>'required|string|max:255',
            'type' =>'required|string|max:255',
            'unit' =>'required|string|max:255',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
               'status' => false,
               'message' => 'Gagal Memasukkan Data',
               'data' => $validator->errors()
            ],400);
        }

        $dataSensor->name = $request->name;
        $dataSensor->type = $request->type;
        $dataSensor->unit = $request->unit;

        $post = $dataSensor->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Memasukkan Data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = sensor::find($id);
        if($data){
            return response()->json([
               'status'=>true,
               'message'=>'Data ditemukan',
               'data'=>$data,
            ],200);
        }else{
            return response()->json([
               'status'=>false,
               'message'=>'Data tidak ditemukan',
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dataSensor = sensor::find($id);
        if(empty($dataSensor)){
            return response()->json([
                'status'=>false,
                'message'=>'Data Tidak Di Temukan'
            ], 404);
        }

        $rules =
        [
            'name' =>'required|string|max:255',
            'type' =>'required|string|max:255',
            'unit' =>'required|string|max:255',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
               'status' => false,
               'message' => 'Gagal Melakukan Update Data',
               'data' => $validator->errors()
            ],400);
        }

        $dataSensor->name = $request->name;
        $dataSensor->type = $request->type;
        $dataSensor->unit = $request->unit;

        $post = $dataSensor->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Update Data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dataSensor = sensor::find($id);
        if(empty($dataSensor)){
            return response()->json([
                'status'=>false,
                'message'=>'Data Tidak Di Temukan'
            ], 404);
        }

        $post = $dataSensor->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Menghapus Data'
        ]);
    }
}
