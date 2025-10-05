<?php

namespace App\Http\Controllers;

use App\Mail\Contact as MailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController 
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'kvkk_consent' => 'required|accepted'
        ], [
            'name.required' => 'Ad alanı zorunludur.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Lütfen geçerli bir e-posta adresi girin.',
            'subject.required' => 'Konu alanı zorunludur.',
            'message.required' => 'Mesaj alanı zorunludur.',
            'kvkk_consent.required' => 'KVKK metnini okumanız ve onaylamanız gerekmektedir.',
            'kvkk_consent.accepted' => 'KVKK metnini okumanız ve onaylamanız gerekmektedir.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Lütfen tüm alanları doldurun.',
                'errors' => $validator->errors()
            ], 422);
        }

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

            Mail::to(['hanificorak@outlook.com'])->send(new MailContact($mailData));

            return response()->json([
                'status' => 'success',
                'message' => 'Mesajınız başarıyla gönderildi.'
            ], 500);
        } catch (\Exception $e) {
            
            return response()->json([
                'status' => 'error',
                'message' => 'Mesajınız gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.'. $e->getMessage()
            ], 500);
        }
    }
}
