<div class="container">
   <div class="card p-3" style="max-width: 540px;">
      <div class="row no-gutters">
         <div class="col-md-9">
            <div class="card-body">
               <h4 class="card-title fw-bold">{{ $contact->name }}</h4>
               <p class="card-text mb-0">{{ $contact->contact }}</p>
               <p class="card-text">{{ $contact->email }}</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="btn-group-vertical">
               <button class="btn btn-block btn-outline-secondary rounded mt-1 mb-3">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAhElEQVRIie2TwQnAIAxF35Klh3YBdxDqPh3HQdq7gj00ooi3xkvxQ0BzeD8JfJh6ZYEbWEfAHZCkIrCPgAfgrN4qm9STG+llk0sTngAvJkH+VgMeBOobM6cFz3c22vAIbNJbKGc5JnzCfwCHEpgcorWCfwpRawDKk7cGdanBewaq8KmuHlYrZbGe+TNUAAAAAElFTkSuQmCC"/>
               </button>
               <form method="POST" action="{{ route('contact.destroy', $contact->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-block btn-danger rounded">
                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAcUlEQVRIie2VzQ2AIAxGW+MW7sRMHh0U5niePIhoWtGokXcjKd8PByryC4CRLZPlrhbEqAmjqivNrkbsNMsbXDF/ewOTQZ7Q0/AdDZpBM2gGdfSWofwLzs9HPNYgicjgXD7JPAkEIBbW5B4RCI4wH2IGDpt3EfVw3qsAAAAASUVORK5CYII="/>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>