<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contact;

class ContactCard extends Component {

    /*
     * The contact information
     */
    public Contact $contact;

    /**
     * Create the component instance.
     *
     * @param Contact $contact
     * @return void
     */
    public function __construct($contact) {
        $this->contact = $contact;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.contact-card');
    }
}
