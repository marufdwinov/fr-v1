<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function get_file_extension($file_name) {
        return substr(strrchr($file_name,'.'),1);
    }

    function getName($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    public function in(Request $request) {

        $class = \App\ClassStudy::where('code', $request->class_id)->first();

        $session_id = null;
        $now = Carbon::now();
        foreach(\App\ClassSession::where('class_id', $class->id)->get() as $session){
            $start = Carbon::create($session->start_at);
            $end = Carbon::create($session->end_at);

            if($now->greaterThanOrEqualTo($start) && $now->lessThanOrEqualTo($end)){
                $session_id = $session->id;
            }
        }
        if($session_id == null){
            return response()->json('Session not found', 404);
        }

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }
        $path = public_path().'/storage/presence/';
        $file->move($path, $file->getClientOriginalName());
        $new = $this->getName(10).'.'.$this->get_file_extension($file->getClientOriginalName());
        rename($path.'/'.$file->getClientOriginalName(), $path.'/'.$new);

        $record = new \App\ClassSessionRecord;
        $record->session_id = $session_id;
        $record->id_number = $request->id_number;
        $record->image_path = $new;
        $record->in = $now;
        $record->save();

        return response()->json('Success');
    }

    public function out(Request $request) {

        $class = \App\ClassStudy::where('code', $request->class_id)->first();

        $session_id = null;
        $now = Carbon::now();
        foreach(\App\ClassSession::where('class_id', $class->id)->get() as $session){
            $start = Carbon::create($session->start_at);
            $end = Carbon::create($session->end_at);

            if($now->greaterThanOrEqualTo($start) && $now->lessThanOrEqualTo($end)){
                $session_id = $session->id;
            }
        }
        if($session_id == null){
            return response()->json('Session not found', 404);
        }

        $record = \App\ClassSessionRecord::where('id_number', $request->id_number)->first();
        $record->update([
            'out' => $now
        ]);

        return response()->json('Success');
    }
}
