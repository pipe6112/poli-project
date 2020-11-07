<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use App\Models\Producto;

class PDFController extends Controller
{
    
    public function PDFProductos(){

    	$productos = Producto::all();
    	$pdf = PDF::loadView('producto.producto', compact('productos'));
    	return $pdf->setPaper('a4', 'landscape')->stream('producto.pdf');
    }


}
