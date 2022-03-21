<?php
use PHPUnit\Framework\TestCase;

final class CpfTest extends TestCase
{
    const INVALID_CPF_NUMBER = false;
    const VALID_CPF_NUMBER = false;

    public function cpfsProvider()
    {
        return [
            'empty' => ['23', self::INVALID_CPF_NUMBER],
            'empty2' => ['131', self::INVALID_CPF_NUMBER],
            'empty3' => ['23', self::INVALID_CPF_NUMBER],
            
        ];
    }
    
    /**
     * @dataProvider cpfsProvider
     */
    public function testValidations($cpf, $isValid)
    {
        $this->assertEquals($cpf, $isValid);
    }
    // public function testPrimeir()
    // {
    //     $this->assertEquals(true, false);
    // }
}