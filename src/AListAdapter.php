<?php
namespace As247\Flysystem\AList;
use As247\CloudStorages\Storage\AList;
use As247\CloudStorages\Support\GetTemporaryUrl;
use As247\CloudStorages\Support\StorageToAdapterV1;
use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Config;

class AListAdapter extends AbstractAdapter
{
    use StorageToAdapterV1;
    use GetTemporaryUrl;
    public function __construct($url, $options = [])
    {
        $this->storage = new AList($url, $options);
        $this->setPathPrefix($options['root'] ?? '');
        $this->throwException = $options['debug'] ?? '';
    }
}