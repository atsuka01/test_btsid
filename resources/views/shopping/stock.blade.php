@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
       <div class="card">
           <div class="card-header">
               <h3 class="card-title">Data Shopping</h3>
           </div>
           <div class="card-body">
               <table class="table table-hover">
                   <thead>
                       <th>ID</th>
                       <th>Name</th>
                      
                   </thead>
                   <tbody>
                       <tr>
                           <td>{{$shopping->id}}</td>
                           <td>{{$shopping->name}}</td>
                       </tr>
                   </tbody>
               </table>
           </div>
       </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Stock</h3>
            </div>
            <div class="card-body">
            {!! Form::open(array('url'=>'shopping/stock/store')) !!}
                <table class="table">
                    <tr>
                        <td>ID Shopping</td>
                        <td><input type="text" class="form-control" name="id_shopping" value="{{$shopping->id}}"></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td><input type="text" class="form-control" name="stock"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Create</button></td>
                        <td>{!! link_to('shopping', 'back', ['class'=>'btn btn-danger']) !!}</td>
                    </tr>
                </table>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Stock</h3>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Date/Time</th>
                </thead>
                <tbody>
                    @foreach ($stock as $v)
                        <tr>
                            <td>{{$v->id}}</td>
                            <td>{{$v->name}}</td>
                            <td>{{$v->stock}}</td>
                            <td>{{$v->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
