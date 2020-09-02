@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(array('url'=>'shopping/store')) !!}
    {!! link_to('shopping', 'back', ['class'=>'btn btn-danger']) !!}
   <div class="card ">
       <div class="card-header">
           <h4 class="card-title">New Shooping</h4>
       </div>
       <div class="card-body">
           <table class="table ">
              <tr>
                  <td>Name</td>
                  <td><input type="text" class="form-control" name="name"></td>
              </tr>
              <tr>
                  <td><button class="btn btn-primary">Create</button></td>
              </tr>
           </table>
       </div>
   </div>
   {!! Form::close() !!}
</div>
@endsection
