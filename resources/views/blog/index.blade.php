

@extends('layouts.master')


@section('content')

@if(session()->has('message'))
          {{ session()->get('message') }}
          @endif
@foreach($blogs as $blog)

<div class="card" style="width: 18rem;">

	  

  


  <img class="card-img-top" src="{{ asset('storage/' . $blog->image) }}" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">{{ $blog->title  }}</h5>
    <p class="card-text">{{  $blog->description }}</p>
    
  </div>
</div>
@comments(['model' => $blog])






                   


  
<div>

 <form action="{{ route('blog.destroy', ['blog'=> $blog->id]) }}" class="d-inline" method="post">

      @csrf
      @method('delete')
                            
    <button class="btn btn-sm btn-danger type="submit" > Delete </button>
  </form> 
  <div class="d-inline">
 <a href="{{ route('blog.edit',['blog'=> $blog->id])  }}" class="btn btn-warning btn-sm" >Edit</a>
</div>
</div>
 <div>  



@endforeach



<P>
<form action="{{ route('blog.cmnt') }}"  method="post"  >
  @csrf
  <div>
       <label for="cmnt">Comment</label>
       <input type="text" name="cmnt" id="cmnt">
       <button class="btn btn-sm btn-default type="submit" > Comment </button>

       



  </div> 

</form>
</P>

 

@endsection
