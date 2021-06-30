@extends('layout')

@section('content')
   
    <a class=" btn btn-primary" href="{{route('company.create')}}">Create new Company</a>


    <table class="table table-hover">
    
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <th scope="row">{{$company->id}}</th>
                        <td>{{$company->name}}</td>
                        <td>{{$company->description}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('company.show',$company->id)}}">Show</a>

                        </td>
                      </tr>
                    @endforeach

             
      
            </tbody>
        
      </table>

      {{$companies->links()}}
@endsection