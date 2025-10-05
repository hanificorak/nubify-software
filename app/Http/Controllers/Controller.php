<?php

namespace App\Http\Controllers;

use App\Mail\Contact as AppMailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;


class ContactController 
{
    public function submit(Request $request)
    {
        try {

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
            ], [
                'name.required' => 'Ad alanı zorunludur.',
                'email.required' => 'E-posta alanı zorunludur.',
                'email.email' => 'Lütfen geçerli bir e-posta adresi girin.',
            ]);

            $ip = $request->ip();
            $location = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
            $country = $location->country ?? null;
            $city    = $location->city ?? null;

            $mdl = new Contact();
            $mdl->name = $request->get('name');
            $mdl->subject = $request->get('subject');
            $mdl->message = $request->get('message');
            $mdl->email = $request->get('email');
            $mdl->ip_address = $ip;
            $mdl->country = $country;
            $mdl->city = $city;
            $mdl->save();

            $mailData = [
                'name' => $mdl->name,
                'email' => $mdl->email,
                'subject' => $mdl->subject,
                'message' => $mdl->message,
                'ip_address' => $ip,
                'country' => $country,
                'city' => $city,
            ];

            Mail::to(['hanificorak@outlook.com','ozbakicifiliz1@gmail.com'])->send(new AppMailContact($mailData));

            return response()->json([
                'success' => 'Mesajınız başarıyla gönderildi.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'errors' => $e->errors()
            ], 422);
        } catch (\Throwable $th) {
            dd($th);
            return response()->json([
                'error' => 'Bir hata oluştu. Lütfen daha sonra tekrar deneyin.'
            ], 500);
        }
    }
}
