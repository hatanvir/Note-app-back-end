<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Notes;
use Validator;
use Response;

class DataCrudController extends Controller
{
    public function __construct()
    {
        
    }
    public function addNote(Request $request){
        $validator = Validator::make($request->all(),[
            'user_id'=>'required|string',
            'subject'=>'string',
            'description'=>'string',
        ]);
        if($validator->fails()){
            //return respnose()->json($validator->errors(),400);
            return response()->json($validator->errors(), 400);
            //return response()->json(['failed'=>"Note added failed",400]);
        }
    
        $note = new Notes;

        $note->user_id = $request->user_id;
        $note->subject = $request->subject;
        $note->description = $request->description;

        if($note->save()){
            return response()->json(['success'=>"Note added successfully",200]);
        }else{
            return response()->json(['failed'=>"Note added failed",400]);
        }
    }
    public function updateNote(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'user_id'=>'required|string',
            'subject'=>'string',
            'description'=>'string',
        ]);
        if($validator->fails()){
            return response($validator->errors(),400);
        }
        //$note = new Notes;
        $note = Notes::find($request->id);

        $note->user_id = $request->user_id;
        $note->subject = $request->subject;
        $note->description = $request->description;

        if($note->save()){
            return response()->json(['success'=>"Note updated successfully",200]);
        }else{
            return response()->json(['failed'=>"Note update failed",400]);
        }
    }
    public function getNotes($user_id){
        $postList = Notes::where('user_id',$user_id)->get();

        return response(['notes'=>$postList,200]);
    }
    public function deleteNote($user_id,$note_id){

            $note = Notes::where('id',$note_id)->where('user_id',$user_id);
            if($note!=null){
                if($note->delete()){
                    return response(['message'=>'Note deleted'],200);
                }else{
                    return response(['message'=>'Failed to delete note'],400);
                }
            }else{
                return response(['message'=>'Note id not found'],400);
            }
    }
}