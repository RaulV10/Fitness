<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAIController extends Controller
{
    // This is the function that will be called when the user submits the form
    public function openai(Request $request) {
        $jsonData = json_encode($request->except(['_token']));

        $prompt = 'Using the following json, create a week workout program tailored to my goals and preferences.' .
        $jsonData .
        'The response must be in a valid JSON object as follow: {"weekWorkout":[{"day" : "", "workout" : [{"exerciseName" : "","desctipion" : "","sets" : "","reps" : "","rest" : ""}]}]}';

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'temperature' => 0.7,
            'max_tokens' => 2080,
            'messages' => [
                ['role' => 'system', 'content' => "You are an expert personal trainer and nutritionist who is going to help me reach my health and fitness goals."],
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        $data = json_decode($result->choices[0]->message->content, true);

        // Use the view() method to load a Blade view
        $pdf = Pdf::loadView('pdf.weeklyWorkout', ['data' => $data]);

        // Save the PDF to a file or return it for download
        return $pdf->download('weekly_workout_plan.pdf');
    }
}
