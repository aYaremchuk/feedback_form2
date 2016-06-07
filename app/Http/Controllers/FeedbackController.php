<?php

namespace App\Http\Controllers;

use App\Book;
use App\Feedback;
use Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index',compact('feedbacks'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('feedbacks.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\StoreFeedbackPostRequest $request)
    {
        $input = Request::all();
        // prepare file for saving into DB
        $filename = $input['attachment']->getClientOriginalName();
        $destination_path = base_path() . '/public/uploads/';
        $safety_file_name = preg_replace('/\s+/', '_', $filename);
        Request::file('attachment')->move( $destination_path, $safety_file_name);
        $input['attachment'] = '/uploads/'. $safety_file_name;
        // change meeting_date to correct format
        $input['meeting_date'] = date("Y-m-d H:i:s", strtotime($input['meeting_date']));
        $input['birthday'] = date("Y-m-d", strtotime($input['birthday']));

        $feedback = new Feedback($input);
        $feedback -> save();

        $message = 'Mы ждем вас в '. date('H:i d-m-Y', strtotime($feedback->meeting_date));
        return redirect('feedbacks/'.$feedback->id)->withMessage($message);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $feedback = Feedback::find($id);
        return view('feedbacks.show',compact('feedback'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return redirect('feedbacks');
    }
}
