<?php
namespace As247\Flysystem\AList;
use As247\CloudStorages\Storage\AList;
use As247\Flysystem\DriveSupport\StorageToAdapter;
use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Config;

class AListAdapter extends AbstractAdapter
{
    use StorageToAdapter;
    public function __construct($url, $options = [])
    {
        $this->storage = new AList($url, $options);
        $this->setPathPrefix($options['root'] ?? '');
        $this->throwException = $options['debug'] ?? '';
    }
    public function getTemporaryUrl($path, $expiration=null, Config $config = null){
        if($expiration===null){
            $expiration=time()+3600;
        }
        if(is_int($expiration)){
            $expiration=(new \DateTime())->setTimestamp($expiration);
        }
        return $this->storage->temporaryUrl($this->applyPathPrefix($path),$expiration,$this->convertConfig($config));
    }
}