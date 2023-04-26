<?php
use PHPUnit\Framework\TestCase;
require_once '..\src\Validateur.php';

final class ValidateurTest extends TestCase
{
    public function testcheck()
    {  
        $validateur = new \app\Validateur();
        $this->assertTrue($validateur->check('aaaa'));
        $this->assertFalse($validateur->check('a'));
    }
}