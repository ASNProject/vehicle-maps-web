<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleMaps;
use App\Http\Resources\Resource;
use Illuminate\Support\Facades\Validator;

class VehicleMapsController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // Get all data
        $vehicleMaps = VehicleMaps::latest()->paginate(5);

        return new Resource(true, 'List Data Vehicle Maps', $vehicleMaps);
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'front_left'            => 'required',
            'front_right'           => 'required',
            'rear_left'             => 'required',
            'rear_right'            => 'required',
            'latitude'              => 'required',
            'longitude'             => 'required',
            'status_front_right'    => 'required',
            'status_front_left'     => 'required',
            'status_rear_left'      => 'required',
            'status_rear_right'     => 'required',
            'speed'                 => 'required',
        ]);

        // check if valiadtion fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create product
        $vehicleMaps = VehicleMaps::create([
            'front_left'            => $request->front_left,
            'front_right'           => $request->front_right,
            'rear_left'             => $request->rear_left,
            'rear_right'            => $request->rear_right,
            'latitude'              => $request->latitude,
            'longitude'             => $request->longitude,
            'status_front_right'    => $request->status_front_right,
            'status_front_left'     => $request->status_front_left,
            'status_rear_left'      => $request->status_rear_left,
            'status_rear_right'     => $request->status_rear_right,
            'speed'                 => $request->speed,
        ]);

        // return response
        return new Resource(true, 'Data Vehicle Maps Berhasil Ditambahkan', $vehicleMaps);
    }

    /**
     * show
     * 
     * @param mixed $id
     * @return void
     */
    public function show($id)
    {
        // find vehicle by ID
        $vehicleMaps = VehicleMaps::find($id);

        // return single data
        return new Resource(true, 'Data Vehicle Maps Data By ID', $vehicleMaps);
    }
}
