<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TestModel;
use DateTime;
use DateTimeImmutable;
use phpDocumentor\Reflection\DocBlockFactory;
use phpDocumentor\Reflection\Types\ContextFactory;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SerializerTest extends KernelTestCase
{
    protected function setUp()
    {
        static::bootKernel();
    }

    public function testDate1_pass()
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

    public function testDate2_fail()
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

    public function testDate3_pass()
    {
        $date = new DateTimeImmutable('2007-06-29 09:41:00');

        $expected = (new TestModel())
            ->setDate3($date);

        $input = [
            'date3' => '2007-06-29T09:41:00+00:00',
        ];

        $serializer = static::$container->get('serializer');
        $actual = $serializer->denormalize($input, TestModel::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testDate4_pass()
    {
        $date = new DateTime('2007-06-29 09:41:00');

        $expected = (new TestModel())
            ->setDate4($date);

        $input = [
            'date4' => '2007-06-29T09:41:00+00:00',
        ];

        $serializer = static::$container->get('serializer');
        $actual = $serializer->denormalize($input, TestModel::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testDate5_fail()
    {
        $date = new DateTime('2007-06-29 09:41:00');

        $expected = (new TestModel())
            ->setDate5($date);

        $input = [
            'date5' => '2007-06-29T09:41:00+00:00',
        ];

        $serializer = static::$container->get('serializer');
        $actual = $serializer->denormalize($input, TestModel::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testDocBlock_pass()
    {
        $refClass = new \ReflectionProperty(TestModel::class, 'date5');

        $contextFactory = new ContextFactory();

        $factory = DocBlockFactory::createInstance();
        $docBlock = $factory->create($refClass, $contextFactory->createFromReflector($refClass));

        $this->assertEquals('\DateTime', (string) $docBlock->getTags()[0]->getType());
    }

    /**
     * This is the root cause of the above bug
     */
    public function testDocBlock_fail()
    {
        $refClass = new \ReflectionProperty(TestModel::class, 'date2');

        $contextFactory = new ContextFactory();

        $factory = DocBlockFactory::createInstance();
        $docBlock = $factory->create($refClass, $contextFactory->createFromReflector($refClass));

        $this->assertEquals('\DateTime', (string) $docBlock->getTags()[0]->getType());
    }
}
