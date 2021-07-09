@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   

                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Product Name</th>
                              <th scope="col">Image</th>
                              <th scope="col">Comments</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $i = 1; @endphp
                           
                            @foreach($products as $product)
                            <tr>
                              <th scope="row">{{ $i++ }}</th>
                              <td>{{ $product->name }}</td>
                              <td><img src = "{{ asset($product->image) }}" width = "100px" height = "100px"></td>
                              <td>
                              
                           

                                
                           
                    

                          



                          
                             <a href = "{{ url('view/comments/'.$product->id) }}" class = "btn btn-success"> View Comments </a>
                         
                          
                              
                           

                            
                             
                              
                              
                          </td>
                            </tr>
                           @endforeach
                          
                          </tbody>

                    </table>
                      {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
