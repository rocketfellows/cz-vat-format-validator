<?php

namespace rocketfellows\CZVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class CZVatFormatValidatorTest extends TestCase
{
    /**
     * @var CZVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new CZVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'CZ12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CZ123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CZ1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'cz12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Cz12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'cZ12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'cz123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'cZ123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Cz123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'cz1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Cz1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'cZ1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => '.12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '.123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '.1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
