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
                              <th scope="col">Comments</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                           @php $i = 1; @endphp
                            @foreach($comment as $row)
                            <tr>
                              <th scope="row">{{ $i++ }}</th>
                              <td>{{ $row->name }}</td>
                              
                            </tr>
                           @endforeach
                          
                          </tbody>

                    </table>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
