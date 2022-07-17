<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Aws\S3\S3Client;





class Arvanupload extends Component
{

    // define('AWS_KEY', 'place access key here');
    // define('AWS_SECRET_KEY', 'place secret key here');
    public $s = 'http://objects.arvanstorage.com';
    public $endPoint = 'http://s3.ir-thr-at1.arvanstorage.com';
    public $AWS_KEY = 'df157722-b850-49d4-b103-5264bfdf9886';
    public $AWS_SECRET = 'ccd6872c12afa662e5f39c7975a0a097a4dd294c933b3bfff47fd8b844df9adb';
    private $listBucket;
    public $buckname;
    public $myfile;

    public function mount()
    {
        $client = new S3Client([
            'region' => '',
            'version' => '2006-03-01',
            'endpoint' => $this->endPoint,
            'credentials' => [
                'key' => $this->AWS_KEY,
                'secret' => $this->AWS_SECRET,
            ],
            // Set the S3 class to use objects. arvanstorage.com/bucket
            // instead of bucket.objects. arvanstorage.com
            'use_path_style_endpoint' => true
        ]);

        $this->listBucket = $client->listBuckets();

        $this->buckname = $this->listBucket['Buckets'];

        //dd(implode('-',$this->buckname[0]));


    }

    public function getlist()
    {
        $client = new S3Client([
            'region' => '',
            'version' => '2006-03-01',
            'endpoint' => $this->endPoint,
            'credentials' => [
                'key' => $this->AWS_KEY,
                'secret' => $this->AWS_SECRET,
            ],
            // Set the S3 class to use objects. arvanstorage.com/bucket
            // instead of bucket.objects. arvanstorage.com
            'use_path_style_endpoint' => true
        ]);

        try {
            $result = $client->putObject([
                'Bucket' => $config['sample_bucket'],
                'Key' => 'file-uploaded-from-php-sdk.png',
                'SourceFile' => '../files/file.png',
            ]);
        } catch (S3Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function render()
    {
        return view('livewire.arvanupload');
    }
}
