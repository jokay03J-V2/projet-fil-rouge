<?php 

it('returns view', function () {
    $response = $this->get('/advices');

    $response->assertViewIs('advices'); // Check whether /advices returns the advices view
});

it('returns advice page Http200', function () {
    $response = $this->get('/advices');

    $response->assertStatus(200); // Tests whether the page returns a view with HTTP code 200.
});