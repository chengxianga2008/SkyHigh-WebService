<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use mikehaertl\pdftk\FdfFile;
use mikehaertl\pdftk\Pdf;

Route::get('/', function () {
    return view('welcome');
});


Route::get( '/ws/genesystel_pdf', ['as' => 'genesystel_pdf', function () {
	
	$contract_number = Request::input('contract_number');
	$code = Request::input('code');
	
	if($code != 'GoqKRmEmABshvIuRxhL3duxhdMvclbyX'){
		return;
	}
	
 		
//	asset('css/bootstrap.min.css');
	$pdf = new Pdf('resources/Genesystel_Landline_combined_contract.pdf');
	$pdf->fillForm(array('Contract ID'=> $contract_number))
	    ->needAppearances()
	    ->saveAs('filled/Genesystel_Landline_combined_contract.pdf');
	
	return response(file_get_contents('filled/Genesystel_Landline_combined_contract.pdf'), 200)
        ->header('Content-type', 'application/pdf')
	    ->header('Content-Disposition', 'inline; filename="Genesystel_Landline_Internet_combined_contract_'.$contract_number.'.pdf"');
			
}]);