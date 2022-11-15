<?php

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/questions', function () {
    $correct_question_ids = json_decode(request('correct_question_ids'));
    return [
        'question' => Question::whereNotIn('id', $correct_question_ids)->inRandomOrder()->take(1)->first()
    ];
});
Route::get('/total-questions-count', function () {
    return [
        'total_question_counts' => Question::count()
    ];
});

Route::post('/questions/{question}/check-answer', function (Question $question) {
    $correct_answer = request('random_language') === 'english' ? $question->in_serbian : $question->in_english;
    return [
        'correct' => request('answer') === $correct_answer
    ];
});
