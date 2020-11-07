<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Persona;
use Flash;
use DataTables;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){
        return view('agenda.index');
    }

    public function listar(Request $request){
        $agendas = Agenda::select("agenda.*", "persona.nombre_persona")
        ->join("persona", "agenda.persona_id", "=", "persona.id")
        ->get();

        return DataTables::of($agendas)

            ->editColumn("estado", function($agenda){
                return $agenda->estado == 1 ? "Atendido" : "Pendiente";
            })
            ->addColumn('editar', function ($agenda) {
                return '<a class="btn btn-outline-primary btn-sm" href="/agenda/editar/'.$agenda->id.'">Editar</a>';
            })
            ->addColumn('cambiar', function ($agenda) {
                if($agenda->estado == 1){
                    return '<a class="btn btn-outline-secondary btn-sm" href="/agenda/cambiar/estado/'.$agenda->id.'/0">Pendiente</a>';
                }else{
                    return '<a class="btn btn-outline-success btn-sm" href="/agenda/cambiar/estado/'.$agenda->id.'/1">Atendido</a>';
                }
                    
            })
            ->rawColumns(['editar', 'cambiar'])
            ->make(true); 
    }

    public function create(){
        $personas = Persona::all();
        return view('agenda.create', compact("personas"));
    }

    public function save(Request $request){

        $request->validate(Agenda::$rules);
        $input = $request->all();

        try {
            Agenda::create([
                "fecha"=>$input["fecha"],
                "hora_inicio"=>$input["hora_inicio"],
                "hora_final"=>$input["hora_final"],
                "estado"=>1,
                "persona_id"=>$input["persona_id"]
            ]);

            Flash::success("Se registro la agenda");

            return redirect("/agenda");

        }catch(\Exception $e){
            Flash::error($e->getMessage());

            return redirect("/agenda/crear");
        }
    }

    public function edit($id){

        $personas = Persona::all();
        $agenda = Agenda::find($id);

        if($agenda==null){
            Flash::error("Agenda no encotrado");
            return redirect("/agenda");

        }

        
        return view("agenda.edit", compact("agenda", "personas"));
    }

    public function update(Request $request){

        $request->validate(Agenda::$rules);
        $input = $request->all();

        try {

            $agenda = Agenda::find($input["id"]);

            if($agenda==null){
                Flash::error("Agenda no encotrado");
                return redirect("/agenda");
    
            }
            
            $agenda->update([
                "fecha"=>$input["fecha"],
                "hora_inicio"=>$input["hora_inicio"],
                "hora_final"=>$input["hora_final"],
                "persona_id"=>$input["persona_id"],
            ]);
            Flash::success("Se modifico la agenda");

            return redirect("/agenda");

        } catch (\Exception $e) {
            Flash::error($e->getMessage());

            return redirect("/agenda");
        }
    }

    public function updateState($id, $estado){

        $agenda = Agenda::find($id);

        if($agenda == null){
            Flash::error("Agenda no encotrado");
            return redirect("/agenda");
        }

        try {
            $agenda->update(["estado" => $estado]);
            Flash::success("Se modifico el estado del agenda");
            return redirect("/agenda");

        } catch (\Exception $e) {
            Flash::error($e->getMessage());
            return redirect("/agenda");
        }

    }

}
