<?php


namespace As247\Flysystem\AList\Tests;

use As247\Flysystem\AList\AListAdapter;
use League\Flysystem\AdapterTestUtilities\FilesystemAdapterTestCase;
use League\Flysystem\FilesystemAdapter;

class FlysystemAListTest extends FilesystemAdapterTestCase
{
    protected static function createFilesystemAdapter(): FilesystemAdapter
    {
        $adapter=new AListAdapter($_ENV['aListAddress'], [
            'token'=>$_ENV['aListToken'],
            'root'=>$_ENV['aListRoot']
        ]);
        return $adapter;
    }
}
