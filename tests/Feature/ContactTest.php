<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;

class ContactTest extends TestCase
{
    /**
     * @test 
     * A basic feature test example.
     *
     * @return void
     */
    public function successCreate() {
        $contact = new Contact([
            'name' => 'Vasco da Gama',
            'contact' => 546921678,
            'email' => 'vasco@mail.com',
        ]);

        $contact->save();

        $this->assertInstanceOf(Contact::class, $contact);
    }

    /**
     * @test 
     * A basic feature test example.
     *
     * @return void
     */
    public function validationName() {
        $this->post('/contact', [
            'name' => 'abc',
            'contact' => 123456777,
            'email' => 'aladdin@mail.com'
        ])->assertSessionHasErrors('name');
    }
}
