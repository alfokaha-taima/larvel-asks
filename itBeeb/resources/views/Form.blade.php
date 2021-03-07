@extends('master.home');
@section('content')
    


@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <span>{{$error}}</span>
    <br>
    @endforeach
</div>
@endif

<form action="/Form" method="Post" submit.prevent="save" >
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mobile</label>
      <input type="number"  name="mobile" class="form-control" id="exampleInputPassword1" placeholder="mobile">
    </div>
   
    <button type="submit" data-toggle="modal" data-target="#save" class="btn btn-primary">Submit</button>
  </form>

    <div class="modal fade" id="save" tabindex="-1" role="dialog" aria-labelledby="save" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>
@endsection