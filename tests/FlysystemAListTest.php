<?php


namespace As247\Flysystem\AList\Tests;

use As247\Flysystem\AList\AListAdapter;
use As247\Flysystem\Test\FlysystemTestCase;
use League\Flysystem\Adapter\AbstractAdapter;

class FlysystemAListTest extends FlysystemTestCase
{
    protected static function createFilesystemAdapter(): AbstractAdapter
    {
        $adapter=new AListAdapter($_ENV['aListAddress'], [
            'token'=>$_ENV['aListToken'],
            'root'=>$_ENV['aListRoot']
        ]);
        return $adapter;
    }
}
