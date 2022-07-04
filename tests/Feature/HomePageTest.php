<?php

use App\Models\Person;

it('can be render homepage', function () {
   $this
       ->get('/')
       ->assertSee('Documentation');
});
