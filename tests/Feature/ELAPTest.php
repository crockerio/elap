<?php

namespace Crockerio\ELAP\Tests\Feature;

use Crockerio\ELAP\Tests\TestCase;

class ELAPTest extends TestCase
{
    /** @test */
    public function it_shows_the_elap_info_screen()
    {
        $response = $this->get('/elap');

        $response->assertSee('ELAP Info');
        $response->assertSee('ELAP Test');
    }
}
