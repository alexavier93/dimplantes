<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tratamento;
use Illuminate\Support\Facades\DB;

class TratamentoController extends Controller
{

    private $tratamento;

    public function __construct(Tratamento $tratamento)
    {
        $this->tratamento = $tratamento;
    }

    public function index()
    {

        $tratamentos = $this->tratamento->paginate(10);

        return view('tratamentos.index', compact('tratamentos'));

    }

    public function info($slug)
    {

        $tratamentos = $this->tratamento->all();

        $tratamento = $this->tratamento->where('slug', $slug)->first();
        
        return view('tratamentos.info', compact('tratamentos', 'tratamento'));
    }


}
