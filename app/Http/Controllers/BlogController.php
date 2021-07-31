<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    

     public function index()
    {
        
        $blogs = Blog::all();
        return view('blog.index',compact('blogs'));
  
     }

    
    public function show(Blog $blog)
    {

        return view('show',[

            'blog' => $blog,
        ]);

    }



     public function create()

     {

        return view('blog.create');
     }

     
     public function edit(Request $request, $blog)
     {

          
          $blog = Blog::where('id','=',$blog)->first();
          return view('blog.edit',compact('blog'));
     }
    



     public function update(Request $request, Blog $blog){
              
             
            

             if($blog->user_id == auth()->id()){


             $blog->update([
                   'title'=> $request->title,
                    'description'=>$request->description,
                     
                   

             ]);



             


              return redirect()->route('blog.index')->with(['message'=>'Blog Updated']);
     
            }

              else 
              {
                  abort(403);
              }


    }

     public function destroy(Blog $blog) 
            {
                if($blog->user_id == auth()->id())
                {

                    $blog->delete();

                    return redirect()->route('blog.index')->with(['message'=>'Blog Deleted']);

                }
                else
                    abort(403);



            }

                     


     public function store(Request $request)
     {

      
       $request->validate([
         
         'title'=> 'required',
         'description'=>'required',
         'image'=>'mimes:jpg,png|max:1024',



       ]);



        
        $path=$request->file('photo')->store('event',['disk'=>'public']);


           
            
         Blog::create([

              'title'=>$request->title,
              'description'=> $request->description,
               'user_id'=>auth()->id(),
              'image'=>$path,
              
              


         ]);


         return redirect()->route('blog.index')->with(['message' => 'Blog Created']);

     }



      


}
