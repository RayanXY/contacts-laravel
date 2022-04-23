@extends('layout')

@section('content')

<div class="container p-3">
   <div class="row justify-content-between mb-2">
      <div class="col-auto">
         <h2>Contacts List</h2>
      </div>
      <div class="col-auto">
         <a href="{{ route('contact.create') }}" class="btn btn-primary">Add Contact</a>
      </div>
   </div>
   
   @if (Session::has('success'))
      <div class="alert alert-success">
         {{ Session::get('success') }}
      </div>
   @endif

   @if (count($contacts) > 0)
      <div class="row">
         @foreach ($contacts as $contact)
         <div class="col-4 mb-2">
            <x-contact-card :contact="$contact" />
         </div>
         @endforeach
      </div>
   @else
      <p>No contacts available.</p>
   @endif
</div>

@endsection

{{-- <div
   v-if="contacts.length > 0"
   class="row"
>
   <div v-for="contact in contacts" :key="contact.id" class="col-4 mb-2">
      <contact-card :contact="contact" />
   </div>
</div>

<div v-else>
   Empty contact list
</div> --}}




