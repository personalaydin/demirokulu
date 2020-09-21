<?php

namespace App\Http\Controllers\Web;

use App\Mail\Contact as MailContact;
use App\Mail\Subscriber as MailSubscriber;
use App\Mail\AskToDoctor as MailAskToDoctor;
use App\Models\Entities\Contact;
use App\Models\Entities\Subscriber;
use Exception;
use Illuminate\Http\Request;
use Mail;

class FormController extends WebController
{
    /**
     * Contact
     * @param Request $request
     * @return string
     */
    public function contact(Request $request)
    {
        $validatedFields = $request->validate([
            'first_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], [], [
            'first_name' => getSentence('contact-name-surname'),
            'phone' => getSentence('contact-telephone'),
            'email' => getSentence('contact-email'),
            'message' => getSentence('contact-message'),
        ]);

        // Send Email
        if (config('app.debug') || config('app.env') == 'local') {
            $to = [
                [
                    'email' => 'burak@enustkat.com.tr',
                    'name' => 'Burak Turan',
                ]
            ];
        } else {
            $to = [
                [
                    'email' => setting('email'),
                    'name' => config('app.name'),
                ],
            ];
        }

       

        try {
            Mail::to($to)->send(new MailContact($request));
            Contact::create($validatedFields);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Subscriber
     * @param Request $request
     * @return string
     */
    public function subscriber(Request $request)
    {
        $validatedFields = $request->validate([
            'email' => 'required|email|unique:subscribers',
            'information_text_2' => 'required',
        ], [], [
            'email' => getSentence('contact-email'),
            'information_text_2' => getPageByTemplate('InformationText')['title'],
        ]);

        // Send Email
        if (config('app.debug') || config('app.env') == 'local') {
            $to = [
                [
                    'email' => 'burak@enustkat.com.tr',
                    'name' => 'Burak Turan',
                ]
            ];
        } else {
            $to = [
                [
                    'email' => setting('email'),
                    'name' => config('app.name'),
                   
                ],
            ];
        }

        try {
            Mail::to($to)->send(new MailSubscriber($request));
            Subscriber::create($validatedFields);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }


    /**
     * Ask To doctor 
     * @param Request $request
     * @return string
     */
    public function askToDoctor(Request $request)
    {
        $validatedFields = $request->validate([
            'askToDoctor' => 'required',
            // 'information_text_1' => 'required',
        ], [], [
            'askToDoctor' => 'Soru',
            'information_text' => getPageByTemplate('InformationText')['title'],
        ]);

        // Send Email
        if (config('app.debug') || config('app.env') == 'local') {
            $to = [
                [
                    'email' => 'burak@enustkat.com.tr',
                    'name' => 'Burak Turan',
                ]
            ];
        } else {
            $to = [
                [
                    'email' => setting('email'),
                    'name' => config('app.name'),
                   
                ],
            ];
        }

        try {
            Mail::to($to)->send(new MailAskToDoctor($request));
            // Subscriber::create($validatedFields);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
