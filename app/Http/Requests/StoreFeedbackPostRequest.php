<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Factory;

class StoreFeedbackPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function __construct(Factory $factory)
    {
        $factory->extendImplicit('check_age', function ($attribute, $value, $parameters)
        {
            $start_age_range = date('Y-m-d', strtotime('-17 years', strtotime(date('Y-m-d'))));
            $end_age_range = date('Y-m-d', strtotime('-65 years', strtotime(date('Y-m-d'))));
            $user_ts = date("Y-m-d", strtotime($value));
            return (($user_ts <= $start_age_range) && ($user_ts >= $end_age_range));
        },
            'Возраст должен быть от 17 до 65 лет'
        );

        $factory->extendImplicit('check_name', function ($attribute, $value, $parameters)
        {
            $words = explode(" ", $value);
            $capitalized_words = false;
            foreach($words as $word) {
                if (preg_match("/^[A-ZА-Я'][a-zа-я-' ]+[a-zа-я']?$/u", $word)) {
                    $capitalized_words = true;
                } else {
                    $capitalized_words = false;
                }
            }
            if (count($words) != 2 || !$capitalized_words) {
                return false;
            } else {
                return true;
            }
        },
            'Введите Имя и Фамилию'
        );
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|check_name',
            'birthday' => 'required|check_age',
            'meeting_date' => 'required|after:today',
            'attachment' => 'required|mimes:pdf,docx,doc',
        ];
    }

}
