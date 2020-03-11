<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {


    public function lista(){

        $analistas = DB::select('select * from analistas');

            return view('estoque')->withanalistas($analistas);

    }
}
