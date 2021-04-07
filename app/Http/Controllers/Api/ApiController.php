<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laptop;
class ApiController extends Controller
{
    public function __invoke(){

        $laptops= Laptop::all();
      return response()->json($laptops);
    }
}
