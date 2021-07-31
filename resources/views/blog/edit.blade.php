@extends('layouts.master')


@section('content')

<div>
      <form  action="{{ route('blog.update',['blog'=>$blog] ) }}" method="post">

            
           @csrf   
           @method('put')
           
           <div>
                 
                 <label for="title">Title</label>
                 <input type="text" name="title" id="title" value="{{ $blog->title }}">
           </div>



            <div>
                  <textarea class="form-control" name="description" id="description" rows="10" placeholder="Description about the blog" >{{  $blog->description  }}

                  </textarea>

                @error('description')
               <span class="text-danger">{{ $message}}</span>
                
                @enderror

                   

            </div>

                  
                    


            <div>
                 <button type="submit" class="btn btn-warning mt-3">Create Blog</button>

            </div>        