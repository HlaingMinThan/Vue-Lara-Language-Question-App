<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/random-question', [QuestionController::class, 'get_random_question']);
Route::get('/total-questions-count', [QuestionController::class, 'get_total_questions_count']);
Route::post('/questions/{question}/check-answer', [QuestionController::class, 'check_answer']);
