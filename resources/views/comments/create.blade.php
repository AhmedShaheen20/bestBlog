@extends('layouts.master')

@section('content')

 <div class="row">
     <div class="col-md-9 offset-md-2">
         <h3>Create Comment Form</h3>
         <hr>
         <form action="/comments" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="com_title">Title</label>
                <input type="text" name="com_title" id="com_title" class="form-control">
            </div>

            <div class="form-group">
               <label for="com_body">Body</label>
               <textarea name="com_body" id="com_body" cols="30" rows="4" class="form-control"></textarea>
           </div>

           <div class="form-group">
               <input type="file" name="coverImage" id="coverImage" class="form-control-file">
           </div>


            <div class="form-group">
               <button type="submit" class="btn btn-primary">Create</button>
           </div>
         </form>




     </div>
 </div>
@endsection
