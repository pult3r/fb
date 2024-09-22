<?php

namespace AdolphYu\FBMessenger\Tests\Models\Message;

use AdolphYu\FBMessenger\Models\Message\Attachment;
use AdolphYu\FBMessenger\Models\Message\Payload;
use AdolphYu\FBMessenger\Models\Message\Product;
use AdolphYu\FBMessenger\Tests\TestCase;
use Faker\Factory;

/**
 *
 * Class AttachmentTest
 * @package AdolphYu\FBMessenger\Tests\Models\Message
 */
class AttachmentTest extends TestCase
{

    /**
     * testToArray
     */
    public function testToArray()
    {

        $expected = self::initData();
        $actual = new Attachment($expected);
        $this->assertEquals($expected, $actual->toArray());
    }

    /**
     * initData
     * @return array
     */
    public static function initData(){
        $faker = Factory::create();
        $type = 'audio';
        $url = $faker->url;
        return [
            'type' => $type,
            'payload' => [
                'url' => $url,
            ]
        ];
    }
}
