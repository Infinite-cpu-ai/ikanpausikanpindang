<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('Laut Bercerita 2026')
        ->assertSee('Agenda utama')
        ->assertSee('Daftar acara');
});
