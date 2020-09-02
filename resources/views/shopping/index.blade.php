@extends('layouts.app')

@section('content')
<div class="container">
    {!! link_to('shopping/create', 'new Shopping', ['class'=>'btn btn-primary']) !!}
    {!! link_to('home', 'back', ['class'=>'btn btn-danger']) !!}
   <div class="card ">
       <div class="card-header">
           <h4 class="card-title">Shooping</h4>
       </div>
       <div class="card-body">
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Date</th>
                      
                       <th>Menu</th>
                   </tr>
               </thead>
               <tbody>
                  @foreach ($shopping as $v)
                      <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->name}}</td>
                        <td>{{$v->created_at}}</td>
                      
                        <td>
                            <a href="{{route('shopping.edit', $v->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('shopping.stock', $v->id)}}" class="btn btn-success">Stock</a>
                            <a href="{{route('shopping.destroy', $v->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                  @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
@endsection
