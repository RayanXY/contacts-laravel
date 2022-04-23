@extends('layout')

@section('content')

<div class="container p-3">
   <div class="row justify-content-between mb-2">
      <div class="col-auto">
         <h2>Contacts List</h2>
      </div>
      <div class="col-auto">
         <a href="/add-contact" class="btn btn-primary">Add Contact</a>
      </div>
   </div>

   @if (count($contacts) > 0)
      <div class="row">
         @foreach ($contacts as $contact)
            <p>{{ $contact->name }}</p>
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




