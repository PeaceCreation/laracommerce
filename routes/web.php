<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductsController;
use Carbon\Carbon;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [ProductsController::class, 'index']);
Route::get('/{name}/{id}', [ProductsController::class, 'index']);
Route::get('/create', function () {
    return view('create');
});
Route::post('/create', function() {
    if (request()->hasFile('image')) {
        $image = request()->file('image');
        $imagePath = $image->store('image', 'public'); 
    } else {
        $imagePath = null; // Set imagePath to null if no image is uploaded
    }

    DB::table('table_products')->insert([
        'image' => $imagePath,
        'name' => request()->input('name'),
        'description' => request()->input('description'),
        'price' => request()->input('price'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    // Redirect to a success page or a page listing products
    return redirect('/'); 
});
// get all Product
Route::get('/', function() {
    $products = DB::table('table_products')->paginate(4);
    return view('index', compact('products'));
});

// Route::get('{name}/{id}', );
// Dashobord
Route::get('/dashbord', function(){
    return view('dashobord');
});

/// new Code 





// Route::put('{name}/{id}', function($name, $id, Request $request){
//     $product = Product::findOrFail($id); 

//     // Validate the request data
//     $request->validate([
//         'name' => 'required|string',
//         'price' => 'required|numeric',
//         // Add other validation rules as needed 
//     ]);

//     // Update the product
//     $product->update($request->all()); 

//     // Redirect back to the product page
//     return redirect()->route('product.show', ['name' => $name, 'id' => $id]); 
// });