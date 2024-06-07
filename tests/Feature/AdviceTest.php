<?php
use App\Models\Advice;
use App\Models\CategoryAdvice;

it('returns a successful response for a specific advice', function () {
    $category = CategoryAdvice::factory(10)->create();
    $advice = Advice::factory()->create();

    $response = $this->get('/advices/' . $advice->id);

    $response->assertStatus(200);
});

it('returns the correct view with the correct data for a specific advice', function () {
    $category = CategoryAdvice::factory(10)->create();
    // Create a single advice 
    $advice = Advice::factory()->create();
    
    // Send a GET request to the specific advice endpoint
    $response = $this->get('/advices/' . $advice->id);


    // Assert that the view is the 'advice' view
    $response->assertViewHas('advice', $advice);
    
    // Assert that the view is the 'advice' view
    $response->assertViewIs('advice');
});