<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'NIM' => 'required|min:3|max:255',
            'email' => 'required|email',
        ]);

        // Proses data disini
        $name = $request->input('name');
        $email = $request->input('email');
        $NIM = $request->input('NIM');


        return view('form', compact('name', 'email', 'NIM'))->with('success', 'Form berhasil dikirim!');
    }
}


