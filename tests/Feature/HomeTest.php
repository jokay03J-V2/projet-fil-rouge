<?php

it('returns a successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $view = $this->view('Home');
    $view->assertSee('home page');
});
