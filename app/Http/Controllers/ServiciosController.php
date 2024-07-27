<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    
    public function index()

    {
        $servicios = Servicio::get();
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

        $servicio = new Servicio($request->validated());
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();

        return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');
    }

    public function edit(servicio $servicio){ 
        return view('edit',[
                'servicios'=>$servicio
        ]);
    }

    public function update(Servicio $servicio, CreateServicioRequest $request){

        if($request->hasFile('image')){
           Storage::delete($servicio->image);
           $servicio->fill($request-validated());
           $servicio->image = $request->file('image')->store('images');
           $servicio->save();
        } else {
            $servicio->update( array_filter($request->validated()) );
        }

        return redirect()->route('servicios.index',$servicio)->with('estado','El servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){ 

        Storage::delete($servicio->image);

        $servicio->delete();
        
        return redirect()->route('servicios.index')->with('estado','El servicio fue eliminado correctamente');
    }
    //  

    public function __construct(){ 
        $this->middleware('auth')->except('index','show');
    }
    

}
