<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    public function index(Request $request)
    {

        /*
        Sessions provide a way to store information about the user across multiple requests.
        https://laravel.com/docs/9.x/session#retrieving-data
        When the session helper is called with a single, string argument, 
        it will return the value of that session key.
        */
        // session(["searchName" => request("searchname")]);
        $name = $request->searchName;

        $data = Usuario::withCount("telefones")
            ->when(!$name, function ($query) {
                $query->whereHas("telefones");
            })
            ->when($name, function ($query) {
                $nome = request("searchName");
                $query->where("nome", "LIKE", "%" . $nome . "%");
            })
            ->orderBy("usuarios.nome")
            ->get();

        return view("index", compact("data"));
    }
}
