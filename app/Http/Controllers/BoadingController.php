<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boadings;
use App\Models\boadingImages;
use App\Models\boadingFeatures;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;

class BoadingController extends Controller
{

    function add(Request $request) : JsonResponse
    {
        try{

            $this->validate($request, [
                'images' => 'required|array',
                'features' => 'sometimes',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|string|max:200',
                'slots' => 'required|numeric',
                'category' => 'required|in:1,2,3',
                'type' => 'required|in:1,2,3,4,5,6,7,8',
                'distance' => 'required|in:1,2,3,4,5,6',
                'city' => 'required|string|max:200',
                'address' => 'required|string|max:300',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'price' => 'required|numeric',
                'area' => 'required|numeric',
                'bathroom' => 'required|in:1,2,3,4,5',
                'rooms' => 'required|in:1,2,3,4,5',
            ]);

            $registred =  boadings::create([
                'name' => $request->get('title'),
                'category' => $request->get('category'),
                'slots' => $request->get('slots'),
                'type' => $request->get('type'),
                'distance' => $request->get('distance'),
                'city' => $request->get('city'),
                'address' => $request->get('address'),
                'latitude' => $request->get('latitude'),
                'longitude' => $request->get('longitude'),
                'price' => $request->get('price'),
                'description' =>"Dsdsdsds",
                'area' => $request->get('area'),
                'bathroom' => $request->get('bathroom'),
                'rooms' => $request->get('rooms'),
                'added_by' => Auth::id(),
            ]);

            if($registred){

                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('public/images');
                    $imageModel = new boadingImages(['image_name' => $imagePath, 'boading_id' => $registred->id]);
                    $imageModel->save();
                }

                if($request->has('features') ){
                    foreach ($request->get('features') as $feature) {
                        $featureModel = new boadingFeatures(['boading_id' => $registred->id, 'feature_id' => $feature]);
                        $featureModel->save();
                    }
                }

            }



            return response()->json([
                'status' => true,
                'message' => 'success',
            ]);

        }catch (\Exception $e){
            return response()->json(['status' => false,'message' => 'Internalserver Error', 'error' => $e->getMessage()]);
        }

    }

    function list(Request $request) : JsonResponse
    {
        try{

            return response()->json([
                'status' => true,
                'data' => boadings::get(),
            ]);

        }catch (\Exception $e){
            return response()->json(['status' => false,'message' => 'Internalserver Error', 'error' => $e->getMessage()]);
        }

    }

    function catalogue(Request $request) : JsonResponse
    {
        try{

            $this->validate($request, [
                'category' => 'required|in:1,2,3',
                'type' => 'required|in:1,2,3,4,5,6,7,8',
                'distance' => 'required|in:1,2,3,4,5,6',
                'min_price' => 'required|string|max:200',
                'max_price' => 'required|string|max:300',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'price' => 'required|numeric',
                'area' => 'required|numeric',
                'bathroom' => 'required|in:1,2,3,4,5',
                'rooms' => 'required|in:1,2,3,4,5',
            ]);

            $registred =  boadings::create([
                'name' => $request->get('title'),
                'category' => $request->get('category'),
                'slots' => $request->get('slots'),
                'type' => $request->get('type'),
                'distance' => $request->get('distance'),
                'city' => $request->get('city'),
                'address' => $request->get('address'),
                'latitude' => $request->get('latitude'),
                'longitude' => $request->get('longitude'),
                'price' => $request->get('price'),
                'description' =>"Dsdsdsds",
                'area' => $request->get('area'),
                'bathroom' => $request->get('bathroom'),
                'rooms' => $request->get('rooms'),
                'added_by' => Auth::id(),
            ]);

            if($registred){

                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('public/images');
                    $imageModel = new boadingImages(['image_name' => $imagePath, 'boading_id' => $registred->id]);
                    $imageModel->save();
                }

                if($request->has('features') ){
                    foreach ($request->get('features') as $feature) {
                        $featureModel = new boadingFeatures(['boading_id' => $registred->id, 'feature_id' => $feature]);
                        $featureModel->save();
                    }
                }

            }



            return response()->json([
                'status' => true,
                'message' => 'success',
            ]);

        }catch (\Exception $e){
            return response()->json(['status' => false,'message' => 'Internalserver Error', 'error' => $e->getMessage()]);
        }

    }
}
