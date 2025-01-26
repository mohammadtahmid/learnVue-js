<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function ourfilestore(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);

        $post = new Post;

        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();

        return redirect()->route('home')->with('success', 'Item successfully created!');
    }

    public function editData($id){
        $post = Post::findOrFail($id);
        return view('edit',['ourPost' => $post]);
    }

    public function deleteData($id){
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route('home')->with('success', 'Item successfully Deleted!');
    }

    public function updateData($id, Request $request){

        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,png'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);


        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();

        return redirect()->route('home')->with('success', 'Item successfully Updated!');
    }




}
