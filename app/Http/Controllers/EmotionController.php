<?php

namespace App\Http\Controllers;

// use Davmixcool\SentimentAnalyzer\Analyzer;
// use GuzzleHttp\Client;

use App\Models\Flight;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminatate\Support\Facades\Auth;

use Sentiment\Analyzer;

class EmotionController extends Controller
{
    public function analyzeEmotion(Request $request)
    {

        $analyzer = new Analyzer();
        $text = $request->input('text');
        $output_emotion = $analyzer->getSentiment($text);


        return response()->json([
            'output_emotion' => $output_emotion,
        ]);
    }

    public function saveEmotionData(Request $request)
    {
        $text = $request->input('text');
        $emotion = $request->input('emotion');
        $flight_id = $request->input('flightId');

        $user_id = auth()->user()->id;

        // Use updateOrCreate to insert or update the record
        Review::updateOrCreate(
            ['user_id' => $user_id, 'flight_id' => $flight_id],
            [
                'review_text' => $text,
                'emotion' => json_encode($emotion)
            ]
        );

        return response()->json(['message' => 'Data saved successfully']);
    }

    public function getFlightDetailsForPositiveEmotionReviews()
    {
        // Query positive emotion reviews
        $positiveEmotionReviews = Review::where('emotion->pos', '>', 0.4)
            ->get();

        // Retrieve flight details and review text for positive emotion reviews
        $positiveEmotionFlightDetails = [];
        foreach ($positiveEmotionReviews as $review) {
            $flightId = $review->flight_id;
            $flightDetails = Flight::find($flightId);
            if ($flightDetails) {
                $flightDetails->review_text = $review->review_text;
                $positiveEmotionFlightDetails[] = $flightDetails;
            }
        }

        return view('/reviewplaces', compact('positiveEmotionFlightDetails'));
    }
}
