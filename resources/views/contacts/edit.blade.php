@extends('layout')

@section('content')

<div class="container p-3">
   <div class="card p-3 form-group">
      <div class="row justify-content-between mb-2">
         <div class="col-auto">
            <h2>Edit Contact</h2>
         </div>
         <div class="col-auto">
            <a href="{{ route('contact.index') }}" class="btn btn-primary">Back</a>
         </div>
      </div>

      <form method="POST" action="{{ route('contact.update', $contact->id) }}">
         @csrf
         @method('PATCH')
         <div class="form-group mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
            @error('name')
               <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
         <div class="mb-2">
            <label for="contact">Number</label>
            <input name="contact" type="text" class="form-control" value="{{ $contact->contact }}">
            @error('contact')
               <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
         <div class="mb-2">
            <label for="email">E-mail</label>
            <input name="email" type="email" class="form-control" value="{{ $contact->email }}">
            @error('email')
               <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
         <button type="submit" class="mt-2 btn btn-primary">Update</button>
      </form>
   </div>
</div>

@endsection
