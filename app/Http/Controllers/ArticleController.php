<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::with('users', 'categories')->get();
        return view('pages.admin.artikel', ['articles' => $data]);
    }

    public function create()
    {
        $data = Category::all();
        return view('pages.admin.form', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = Article::find($id);
        return view('pages.admin.edit')->with('data',$data);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'title' => 'required',
            'isi' => 'required',
            'preview' => 'required',
        ]);

        $article = new Article();

        $article->title = $input['title'];
        $article->isi = $input['isi'];
        $article->preview = $input['preview'];
        $article->author_id = Auth::user()->id;

        $article->save();

        foreach ($input['categories'] as $category) {
            $article->categories()->attach($category);
        }
        return redirect(route('artikel.index'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        Article::where('id', $id)
        ->update(['title' => $request->input('title'),
                 'isi'=>$request->input('isi'),
                 'preview'=>$request->input('preview')]
                );




        return redirect(route('artikel.index'));
    }

    public function destroy($id){
        $article=Article::destroy($id);

        return redirect(route('artikel.index'));
     }
}
