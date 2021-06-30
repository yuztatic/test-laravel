@extends('layout')

@section('content')
{{-- <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> --}}



  <form action="{{route('company.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control">
        <small class="form-text text-muted">We'll never share your email with anyone else</small>

    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control"></textarea>

    </div>

    <button type="submit" class="btn btn-primary mt-5">Submit</button>
  </form>
@endsection