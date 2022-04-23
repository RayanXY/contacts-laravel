@extends('layout')

@section('content')

<div class="container p-3">
   <div class="card p-3 form-group">
      <div class="row justify-content-between mb-2">
         <div class="col-auto">
            <h2>Add Contact</h2>
         </div>
         <div class="col-auto">
            <a href="{{ route('contact.index') }}" class="btn btn-primary">Back</a>
         </div>
      </div>

      <form method="POST" action="{{ route('contact.store') }}">
         @csrf
         <div class="form-group mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="John Doe" class="form-control">
            @error('name')
               <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
         <div class="mb-2">
            <label for="contact">Number</label>
            <input name="contact" type="text" placeholder="123456789" class="form-control">
            @error('contact')
               <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
         <div class="mb-2">
            <label for="email">E-mail</label>
            <input name="email" type="email" placeholder="example@mail.com" class="form-control">
            @error('email')
               <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
         <button type="submit" class="mt-2 btn btn-primary">Save</button>
      </form>
   </div>
</div>

@endsection