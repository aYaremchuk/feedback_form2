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
    public function store()
    {
        $feedback = Request::all();
        Feedback::create($feedback);
        return redirect('feedbacks');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
