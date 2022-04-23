@extends('layout')

@section('content')

<div class="container p-3" style="max-width: 450px">
   <div class="card p-3 form-group">
      <div class="row justify-content-between mb-2">
         <div class="col-auto">
            <h2>Contact Details</h2>
         </div>
         <div class="col-auto">
            <a href="/" class="btn btn-primary">Back</a>
         </div>
      </div>
      <div class="mb-2">
         <label for="inputName">Name</label>
         <input id="inputName" class="form-control" type="text" readonly value="{{ $contact->name }}">
      </div>
      <div class="mb-2">
         <label for="inputNumber">Number</label>
         <input id="inputNumber" class="form-control" type="text" readonly value="{{ $contact->contact }}">
      </div>
      <div class="mb-2">
         <label for="inputEmail">E-mail</label>
         <input id="inputEmail" class="form-control" type="email" readonly value="{{ $contact->email }}">
      </div>
      <div class="container mt-2">
         <div class="row justify-content-center mt-2">
            <div class="col-auto">
               <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary rounded" role="button">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAhElEQVRIie3TsQmAMBCF4VtSUugC2SFg9nEcB9HewG9zwXBgo2ch5FXhiu9dAhHpEREgATsQvsAzVwowfYEfwNKc39/EbB51Vks2TxxgBaJuD5A88EPR1ZRlLzzoLHrjBRh1NjTPMne843/HFaupnyg0+PNPZAvcN7cFJj74TYEf3nOXE2kR/ChH3hDIAAAAAElFTkSuQmCC">
               </a>
            </div>
            <div class="col-auto">
               <form method="POST" action="{{ route('contact.destroy', $contact->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger rounded">
                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAcUlEQVRIie2VzQ2AIAxGW+MW7sRMHh0U5niePIhoWtGokXcjKd8PByryC4CRLZPlrhbEqAmjqivNrkbsNMsbXDF/ewOTQZ7Q0/AdDZpBM2gGdfSWofwLzs9HPNYgicjgXD7JPAkEIBbW5B4RCI4wH2IGDpt3EfVw3qsAAAAASUVORK5CYII="/>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection
