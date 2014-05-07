<?php

/*
|--------------------------------------------------------------------------
| AppliCarrierion Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an appliCarrierion.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	#return View::make('hello');
	return "All carriers";
});

Route::model('carrier', 'Carrier');

Route::get('carriers/create', function() {
  $carrier = new Carrier;
  return View::make('carriers.edit')->with('carrier', $carrier)->with('method', 'post');
});


Route::get('carriers/{carrier}', function(Carrier $carrier) {
  return View::make('carriers.single')->with('carrier', $carrier);
});

Route::get('carriers/{id}', function($id)
{
	#return View::make('hello');
	#return "All carriers";
    #return "Carrier #$id";
    return "Carrier #$id";
})->where('id', '[0-9]+');

Route::get('about', function(){
  return View::make('about')->with('number_of_carriers', 9000);
});

Route::get('carriers', function(){
  #$carriers = Carrier::all();
  $carriers = Carrier::all();
  return View::make('carriers.index')->with('carriers', $carriers);
    
});
Route::get('carriers/{carrier}/edit', function(Carrier $carrier) {
  return View::make('carriers.edit')->with('carrier', $carrier)->with('method', 'put');
});

Route::get('carriers/{carrier}/delete', function(Carrier $carrier) {
  return View::make('carriers.edit')->with('carrier', $carrier)->with('method', 'delete');
});
Route::post('carriers', function(){
$carrier = Carrier::create(Input::all());
return Redirect::to('carriers/' . $carrier->id)->with('message', 'Successfully created page!');
});
Route::put('carriers/{carrier}', function(Carrier $carrier) {
  $carrier->update(Input::all());
  return Redirect::to('carriers/' . $carrier->id)->with('message', 'Successfully updated page!');
});
Route::delete('carriers/{carrier}', function(Carrier $carrier) {
  $carrier->delete();
  return Redirect::to('carriers')->with('message', 'Successfully deleted page!');
});

?>
