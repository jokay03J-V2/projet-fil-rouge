<?php 

it('returns view', function () {
    $response = $this->get('/advices');

    $response->assertViewIs('advices'); 
});

it('returns advice page Http200', function () {
    $response = $this->get('/advices');

    $response->assertStatus(200);
});