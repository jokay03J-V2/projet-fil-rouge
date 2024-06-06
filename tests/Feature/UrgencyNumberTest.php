<?php
use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;

it('returns a successful response', function () {
    $response = $this->get('/numbers');
    $response->assertStatus(200);
});

it('return the correct view with the correct data', function () {
    // go to the /numbers page
    $response = $this->get('/numbers');
    // check if view has data
    $response->assertViewHas('numbers', UrgencyNumber::all());
    $response->assertViewHas('categories', UrgencyCategory::all());
    // check if response is the urgenceNumber/index view
    $response->assertViewIs('urgencyNumber.index');
});
