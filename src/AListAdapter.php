<?php
namespace As247\Flysystem\AList;
use As247\CloudStorages\Storage\AList;
use As247\CloudStorages\Support\StorageToAdapter;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\PathPrefixer;
use League\Flysystem\UrlGeneration\TemporaryUrlGenerator;

class AListAdapter implements FilesystemAdapter, TemporaryUrlGenerator
{
    use StorageToAdapter;
    protected $prefixer;
    public function __construct($url, $options = [])
    {
        if(!isset($options['root']) && isset($options['prefix'])){
            $options['root']=$options['prefix'];
        }
        $this->storage = new AList($url, $options);
        $this->prefixer = new PathPrefixer($options['root']??'', DIRECTORY_SEPARATOR);
    }

}