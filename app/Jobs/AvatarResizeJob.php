<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AvatarResizeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $disk;
    protected $path;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($disk, $path)
    {
        $this->disk = $disk;
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file_path = $save_to = config("filesystems.disks.$this->disk.root") . '/' . $this->path;
        image_resize_from_storage($file_path, 150, null,  $save_to, 100);
    }
}
