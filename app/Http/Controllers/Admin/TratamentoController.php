<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TratamentoRequest;
use App\Models\Tratamento;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class TratamentoController extends Controller
{

    private $tratamento;

    public function __construct(Tratamento $tratamento)
    {
        $this->tratamento = $tratamento;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamentos = $this->tratamento->paginate(10);

        return view('admin.tratamentos.index', compact('tratamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tratamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TratamentoRequest $request)
    {
        $data = $request->all();

        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;

        $image = $request->file('image')->store('tratamentos', 'public');
        $data['image'] = $image;

        // Redimensionando a imagem
        $image = Image::make(public_path("storage/{$image}"))->fit(660, 500);
        $image->save();


        $this->tratamento->create($data);

        flash('Serviço criado com sucesso!')->success();
        return redirect()->route('admin.tratamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tratamento)
    {
        $tratamento = $this->tratamento->findOrFail($tratamento);

        return view('admin.tratamentos.edit', compact('tratamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TratamentoRequest $request, $tratamento)
    {
        $data = $request->all();
        $tratamento = $this->tratamento->find($tratamento);

        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;
        
        if ($request->view_home == 1) {
            $data['view_home'] = 1;
        } else {
            $data['view_home'] = 0;
        }

        if ($request->hasFile('image')) {

            if (Storage::exists($tratamento->image)) {
                Storage::delete($tratamento->image);
            }

            $image = $request->file('image')->store('tratamentos', 'public');
            $data['image'] = $image;

            // Redimensionando a imagem
            $image = Image::make(public_path("storage/{$image}"))->fit(660, 500);
            $image->save();
        }
        
        $tratamento->update($data);

        flash('Serviço atualizado com sucesso!')->success();
        return redirect()->route('admin.tratamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $tratamento = $this->tratamento->find($id);

        if ($tratamento->delete() == TRUE) {

            flash('Serviço removido com sucesso!')->success();
            return redirect()->route('admin.tratamentos.index');

        }
        
    }

}


