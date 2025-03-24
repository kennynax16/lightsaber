<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        try {
            // Сохраняем в базу
            Contact::create($data);

            // Отправляем письмо
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));

            return redirect()->back()->with('success', 'Ваше сообщение отправлено!');
        } catch (Exception $e) {
            Log::error('Ошибка при отправке письма: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Ошибка при отправке письма. Попробуйте позже.');
        }
    }
}
