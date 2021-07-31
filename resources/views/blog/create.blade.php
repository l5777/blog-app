@extends('layouts.master')


@section('content')
sdsdds
<div>
      <form action="{{ route('blog.store') }}" method="post"  enctype="multipart/form-data">

            
           @csrf   
           
           <div>
                 
                 <label for="title">Title</label>
                 <input type="text" name="title" id="title">
           </div>



            <div>
                  <textarea class="form-control" name="description" id="description" rows="10" placeholder="Description about the blog"></textarea>

                @error('description')
               <span class="text-danger">{{ $message}}</span>
                
                @enderror

                   

            </div>

                  
                     <div class="form-group mt-3">
                        <label for="date">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" accept="image/jpg,image/png">

                         @error('photo')

                            <span class="text-danger">{{ $message}}</span>

                            @enderror
                    </div>






            <div>
            	   <button type="submit" class="btn btn-warning mt-3">Create Blog</button>

            </div>      	