<?php

it('returns a successful response', function () {
    $response = $this->get(route('information.point'));
    $response->assertStatus(200);
    $response->assertViewIs('information-point');
    $response->assertSee("Rechercher un point");
});
