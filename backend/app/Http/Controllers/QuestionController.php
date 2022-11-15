<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{
    public function get_random_question()
    {
        $correct_question_ids = json_decode(request('correct_question_ids'));
        return [
            'question' => Question::whereNotIn('id', $correct_question_ids)->inRandomOrder()->take(1)->first()
        ];
    }

    public function get_total_questions_count()
    {
        return [
            'total_question_counts' => Question::count()
        ];
    }

    public function check_answer(Question $question)
    {
        $correct_answer = request('random_language') === 'english' ? $question->in_serbian : $question->in_english;
        return [
            'correct' => request('answer') === $correct_answer
        ];
    }
}
