<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return response()->json(Contact::all());
    }

    public function store(Request $request): JsonResponse
    {
        $contact = Contact::create($request->only(['name', 'email', 'message', 'ip']));

        return response()->json([
            'message' => 'Datos enviados correctamente',
            'data' => $contact
        ], 201);
    }


    public function show(Contact $contact)
    {
        return response()->json($contact);
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return response()->json(['message' => 'Datos actualizados correctamente']);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }
}
