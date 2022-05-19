<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('papau84@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('papau84gmail.com');
        $this->assertFalse($email);
    }

    public function test_url() 
    {
        $url = Validate::url('https://www.google.com');
        $this->assertTrue($url);

        $url = Validate::url('google.com');
        $this->assertFalse($url);
    }
}