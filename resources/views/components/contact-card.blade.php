<div class="container">
   <div class="card p-3" style="max-width: 540px;">
      <div class="row no-gutters">
         <div class="col-md-9">
            <div class="card-body">
               <h4 class="card-title fw-bold">{{ $contact->name }}</h4>
               <div>
                  <div class="d-inline">
                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA8klEQVRIie3VsS4EQRwH4I+oRMdFJZF7AFHKvQNPcLwGvZZHEI/giPpEqRERUV2hVqJwEkaxs7HWXuR2Zyt+yWSz2X9+XzGZWf4zZS4QCmuMzZTAuAQEHDQpnC29P1XMLKYEHipm1lICdxUz61hIBVxWzNzgtS5QTgdvvjb4HsupyvMMYvkogsmzEYEXrLYBwHlEBm0BXTxHZLctpB+BD2xPmJnDfBNkv4Dslb51cI33+DzGIbamAWYKSMApVmL5rZ/3VlDzzPRl91SQ7c1oQnm+aqWLs1+KGwF5ejjx/cQnBfIsYQdHuMKj7H8yTAX8kXwCkiNTT5rkMssAAAAASUVORK5CYII="/>
                  </div>
                  <div class="d-inline">
                     <span class="card-text mb-0">{{ $contact->contact }}</span>
                  </div>
               </div>
               <div>
                  <div class="d-inline">
                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA+0lEQVRIie3UTUoDQRAF4I/gLiKu/cMrqOQOhrhz79IreApRcOEhFJSApxC9gjKJunbhykBc2CHtpGcMM7MQyYNmmq5673VXDcUCfwk9DDGuuQbopgwGDYhPVpYymARXqhUAtCOdGbyHwAsOK4gf4DlofKQS1nAV3aCPrTmE13Ed8e6wXUbo4Sm6yQmWEnktHJu+/BVHZcKXWA37Nk7xGcgP2Ityd3EfYiNcmPZuGWcpgzHecmc7OaHzQB6Fs0d0cpxMQZOLup8vxW+lK/yLCgMBG7jBLTZL8iobzIsfOq0GBEvxvwyG4Vt30PE9OGfQ1cxEzbBf49ELNIwvGf2IXh7cgg8AAAAASUVORK5CYII="/>
                  </div>
                  <div class="d-inline">
                     <span class="card-text">{{ $contact->email }}</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="btn-group-vertical mt-1">
               <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-secondary rounded mb-2" role="button">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABEElEQVRIie2TTWoCQRCFe9xGd+pJsvfnBkoOkixk4kJwdKOnMeg5YjyAnsGfCFmZLwvfQKM4VqshIHlQdM/MV/WKocq5uxRQBvrAB7BVTIEeULq2+BOw4bTWQPOa4t8qNAIqwIOiCrzp2w5ohBYve523MrhYzAoohhj0084N7FhsEmIwU1LFwNbETkMMPpWUN7AFsZtzbM7PM3fjXGQFfYOFzkdDXsrMQwwmOp8NBi86xwZ2L6CkJQKIM7i2mGXwVgNNLREaxRqQV9SBibfRnaDinklDS3RKS6DjPXcvMSkCCfCu8d3qnqS/5cA03MTQRHxgMvg3ucgkl5VoVRRFQ+fcq/fq6xZ1jwR0f2Wi/lQ/2mvMQ0czO9IAAAAASUVORK5CYII=">
               </a>
               <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary rounded mb-2" role="button">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAhElEQVRIie3TsQmAMBCF4VtSUugC2SFg9nEcB9HewG9zwXBgo2ch5FXhiu9dAhHpEREgATsQvsAzVwowfYEfwNKc39/EbB51Vks2TxxgBaJuD5A88EPR1ZRlLzzoLHrjBRh1NjTPMne843/HFaupnyg0+PNPZAvcN7cFJj74TYEf3nOXE2kR/ChH3hDIAAAAAElFTkSuQmCC">
               </a>
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
