<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->only(['name', 'email', 'company', 'message', 'g-recaptcha-response']);
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        Mail::to('sales@mandiri-technology-sejahtera.com')->send(new SendEmail($data));

        return response()->json([
            'success' => true,
            'message' => 'Message has been sended'
        ]);
    }
}
