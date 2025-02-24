<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //
    public function viewAll(Request $request)
    {
        $output = Inventory::paginate(12);
        return view('inventory', ['inventory' => $output]);
    }
}
