<?php

namespace App\Jobs;

use App\Models\Announcement;
use Illuminate\Bus\Queueable;
use App\Models\AnnouncementImage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearchImage implements ShouldQueue

{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($announcement_image_id)
    {

        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i= AnnouncementImage::find($this->announcement_image_id);
        

        if (!$i) {
           return;
        }
        $image = file_get_contents(storage_path('/app/' . $i->file));

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
        $imageAnnotator= new ImageAnnotatorClient();
        $response= $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe= $response->getSafeSearchAnnotation();
        

        $adult= $safe->getAdult();
        $medical= $safe->getMedical();
        $spoof= $safe->getSpoof();
        $violence= $safe->getViolence();
        $racy= $safe->getRacy();

        // echo json_encode([$adult, $medical,$spoof, $violence, $racy]);


        $likelihodName= [

            'UNKNOWN','VERY_UNLIKELY', 'UNLIKELY', 'POSSIBLE', 'LIKELY', 'VERYLIKELY'
        ];
        $i->adult=$likelihodName[$adult];
        $i->medical=$likelihodName[$medical];
        $i->spoof=$likelihodName[$spoof];
        $i->violence=$likelihodName[$violence];
        $i->racy=$likelihodName[$racy];

        $i->save();
        


        }


}
