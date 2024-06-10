<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private function usuarios () {
        return [
            [
                "id" => 1,
                "name" => "João Silva",
                "email" => "joao.silva@example.com",
                "age" => 28,
                "gender" => "Male"
            ],
            [
                "id" => 2,
                "name" => "Maria Oliveira",
                "email" => "maria.oliveira@example.com",
                "age" => 34,
                "gender" => "Female"
            ],
            [
                "id" => 3,
                "name" => "Carlos Santos",
                "email" => "carlos.santos@example.com",
                "age" => 45,
                "gender" => "Male"
            ],
            [
                "id" => 4,
                "name" => "Ana Costa",
                "email" => "ana.costa@example.com",
                "age" => 29,
                "gender" => "Female"
            ],
            [
                "id" => 5,
                "name" => "Pedro Souza",
                "email" => "pedro.souza@example.com",
                "age" => 31,
                "gender" => "Male"
            ]
        ];
    }

    public function index()
    {
        return response()->json($this->usuarios());
    }

    public function findById ($id) {
        $data = null;
        foreach ($this->usuarios() as $usuario) {
            if ($usuario ["id"] == $id) {
                $data = $usuario;
                break;
            }
        }
        return $data ? response()->json($data) : abort(code:404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "id" => "numeric",
            "name" => "required|min:5",
            "email" => "email",
            "age" => "gte:13",
            "gender" => "required"
        ]);

        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
