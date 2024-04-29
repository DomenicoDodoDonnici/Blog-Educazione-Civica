<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandController extends Controller
{
    public function runCommand(Request $request)
    {
            $validated = $request->validate(['command' => ['required', 'string']]);

            // Esegui il comando Artisan
            Artisan::call($validated['command']);

            // Ottieni l'output del comando
            $output = Artisan::output();

            return response()->json(['message' => 'Command executed successfully', 'output' => $output]);
    }
}
