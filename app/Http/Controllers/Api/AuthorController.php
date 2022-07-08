<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();
        return response([
            'total'=>$article->count(),
            'messages'=>'Retrieved',
            'data'=>AuthorResource::collection($article)
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required|max:100',
            'isi'=>'required|min:5|',
            'preview'=>'required|min:5',
        ]);
        if($validator->fails()){
            return response([
                'error'=>$validator->errors(),
                'status'=>'Validation Error'
            ]);
        }
        $author=Article::create($request->all());
        return response(['data'=>new AuthorResource($author),'message'=>'Article created'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::find($id);
        if($article!=null){
            return response(['project'=>new AuthorResource($article),'message'=>'Retrieved'],200);
        }else{
            return response(['message'=>'no data'],403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator=Validator::make($request->all(),[
            'title'=>'required|max:100',
            'isi'=>'required|min:5',
            'preview'=>'required|min:5'
        ]);

        if($validator->fails()){
            return response([
                'error'=>$validator->errors(),
                'status'=>'Validation Error'
            ]);
        }
        $article =Article::findOrFail($id);
        if($article!=null){
            $article->update($request->all());
            return response(['data'=>new AuthorResource($article),'message'=>'Updated'],202);
        }else{
            return response(['message'=>'Error lah apalagi?'],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        if($article!=null){$article->delete();
            return response(['message'=>'Deleted'],202);
        }else{
            return response(['message'=>'Error lah apalagi?'],403);
        }
    }
}
