<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('Rasa pesisir yang')
        ->assertSee('data-menu-toggle')
        ->assertSee('Temukan rasanya');
});
