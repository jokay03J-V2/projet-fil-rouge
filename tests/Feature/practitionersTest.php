<?php

it('returns a successful response', function () {
    $response = $this->get('/practitioners');
    $response->assertStatus(200);
    $response->assertViewIs('find_practitioners');
});
