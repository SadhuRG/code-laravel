<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    
    public function index()

    {
        $servicios = Servicio::orderBy('titulo','asc')->get();
        return view('servicios', compact('servicios'));
    }

    public function show($id){
        return view('show',[
            'servicios' => Servicio::find($id)
        ]);
    }
    
    public function create(){
        return view('create',[
            'servicios'=>new Servicio
        ]);
    }

    public function store(CreateServicioRequest $request){ 


        servicio::create($request->validated());

        return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');
    }

    public function edit(servicio $id){ 
        return view('edit',[
                'servicios'=>$id
        ]);
    }

    public function update(Servicio $servicio, CreateServicioRequest $request){ 
        $servicio->update($request->validated());
        return redirect()->route('servicios.index',$servicio)->with('estado','El servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){ 
        $servicio->delete();
        return redirect()->route('servicios.index')->with('estado','El servicio fue eliminado correctamente');
    }
    //  

    public function __construct(){ 
        $this->middleware('auth')->except('index','show');
    }
    

}
