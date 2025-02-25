<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //
    public function viewAll(Request $request){

        $inventory = [];
        request()->query('car-id') ? array_push($inventory, ['id', request()->query('car-id')]) : "";
        request()->query('make') ? array_push($inventory, ['make', request()->query('make')]) : "";
        request()->query('model') ? array_push($inventory, ['model', request()->query('model')]) : "";
        request()->query('year') ? array_push($inventory, ['year', request()->query('year')]) : "";
        request()->query('status') ? array_push($inventory, ['status', 1]) : array_push($inventory, ['status', 0]);


        $makes = Inventory::select('make')->distinct()->orderBy('make', 'ASC')->get();
        $models = Inventory::select('model')->distinct()->get();

        if (count($inventory) == 0){
            $inventory = Inventory::paginate(12);

        } else {
            $inventory = Inventory::where($inventory)->paginate(12);
        }

        return view('inventory', ['inventory' => $inventory, 'makes' => $makes, 'models' => $models]);
    }

    public function viewCar(int $id){
        return view('view-car', ['car' => Inventory::where('id', $id)->get()]);
    }
}
