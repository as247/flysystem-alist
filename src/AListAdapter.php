<?php
namespace As247\Flysystem\AList;
use As247\CloudStorages\Storage\AList;
use As247\Flysystem\DriveSupport\StorageToAdapter;
use DateTimeInterface;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\PathPrefixer;
use League\Flysystem\Config;
use League\Flysystem\UrlGeneration\TemporaryUrlGenerator;

class AListAdapter implements FilesystemAdapter, TemporaryUrlGenerator
{
    use StorageToAdapter;
    protected $prefixer;
    public function __construct($url, $options = [])
    {
        $this->storage = new AList($url, $options);
        $this->prefixer = new PathPrefixer($options['root']??'', DIRECTORY_SEPARATOR);
        $this->throwException = $options['debug'] ?? '';
    }



}