<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Category;

class ForumController extends Controller
{
    //
    public function index(){
        $category = Category::orderBy('name', 'ASC')->get();
        $forum = Forum::with(['category'])->orderBy('created_at', 'DESC');
        if (request()->q != '') {
            $forum = $forum->where('name', 'LIKE', '%' . request()->q . '%');
        }
        $forum = $forum->paginate(6);
        return view('forum', compact('forum', 'category'));
    }

    public function create(){
        $category = Category::orderBy('name', 'ASC')->get();

        return view('user.create-forum', compact('category'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);
        /*dd($request->all());*/
        $request->request->add(['user_id'=>  auth()->user()->id]);
        $request->request->add(['category_id'=> $request->category_id]);
        $forum = Forum::create($request->all());
        /*$forum = Forum::create([
            'slug' => $request->category_id,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);*/

        /*return $request->all();*/
        /*$request->request->add(['user_id'=>  auth()->user()->id]);
        $request->request->add(['category_id'=> ]);*/

        return redirect(route('list.tanya-jawab'));

    }
}
