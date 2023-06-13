<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articleList = Article::userRecordsOnly('articles.index')->where('id','>',0);

        $filters = $request->all();

        if(array_key_exists('title', $filters)){
            $articleList->where('title', 'like','%'.$filters['title'].'%');
        }

        $articleList->orderby('deleted_at', 'asc');
        $articleList->orderby('id', 'asc');

        $articleList = $articleList->paginate(config('constants.RECORD_PER_PAGE'));

        // Fetch random photos from Unsplash API
        $response = Http::get('https://api.unsplash.com/photos/random', [
            'count' => $articleList->count(), // Number of random photos to fetch, same as the number of articles
            'client_id' => 'NDFwFidV0oPEUM7Kw5mjCRZ-rU9Pw4hlsRc50dQyies', // Replace with your actual Unsplash Access Key
            'query' => 'hotel',
        ]);

        $photos = $response->json();

        return view('console/articles/index', compact('articleList', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request) : RedirectResponse
    {
          // Retrieve the validated data from the request
    $validatedData = $request->validated();

    // Create a new Article instance with the validated data
    $article = new Article($validatedData);

    // Save the article
    $article->save();

    // Redirect to the appropriate page (modify the route as per your requirements)
    return redirect()->route('articles.index')->with('status', 'Article has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $error = [];

        if($article->canEditRecord('articles.index')){
            return view('console/articles/edit', compact('error','article'));
        }

        abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        if($article->canEditRecord('articles.index')){
            //
        }

        abort(401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article) : RedirectResponse
    {
        if($article->canDeleteRecord('articles.index')){
            $article->delete();

            return Redirect::route('articles.index')->with('status','Record has been deleted.');
        }

        abort(401);
    }
    
}
