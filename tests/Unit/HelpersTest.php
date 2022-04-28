<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class helpers extends TestCase
{
    public function test_get_time_of_date_time() {
        $date = '2022-12-06 23:12:24';
        $this->assertEquals(getTimeOfDateTime($date), '23:12');
    }

    public function test_get_date_of_date_time() {
        $date = '2022-12-06 23:12:24';
        $this->assertEquals(getDateOfDateTime($date), '06/12');
    }
}
