<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TestModel;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SerializerTest extends KernelTestCase
{
    protected function setUp()
    {
        static::bootKernel();
    }

    public function testWorks()
    {
        $date = new DateTime('2007-06-29 09:41:00');

        $expected = (new TestModel())
            ->setDate1($date);

        $input = [
            'date1' => '2007-06-29T09:41:00+00:00',
        ];

        $serializer = static::$container->get('serializer');
        $actual = $serializer->denormalize($input, TestModel::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testFails()
    {
        $date = new DateTime('2007-06-29 09:41:00');

        $expected = (new TestModel())
            ->setDate2($date);

        $input = [
            'date2' => '2007-06-29T09:41:00+00:00',
        ];

        $serializer = static::$container->get('serializer');
        $actual = $serializer->denormalize($input, TestModel::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testPass2_when_not_in_trait()
    {
        $date = new DateTime('2007-06-29 09:41:00');

        $expected = (new TestModel())
            ->setDate3($date);

        $input = [
            'date3' => '2007-06-29T09:41:00+00:00',
        ];

        $serializer = static::$container->get('serializer');
        $actual = $serializer->denormalize($input, TestModel::class, 'json');

        $this->assertEquals($expected, $actual);
    }
}
