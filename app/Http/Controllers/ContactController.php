<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('contact');
    }

    public function store(Request $request)
    {
        // Валидация данных формы
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Сохранение данных в базу
        $contact = Contact::create($validated);

        // Вернуть успешное сообщение или редирект
        return response()->json(['message' => 'Your message has been sent successfully!']);
    }
}
