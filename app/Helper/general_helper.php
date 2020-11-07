<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('get_direction')) {
    function get_direction()
    {
        return app()->getLocale() == 'ar' ? 'rtl' : 'ltr';
    }
} // ./get_direction

if (!function_exists('get_style_derection')) {
    function get_style_derection()
    {
        return app()->getLocale() == 'ar' ? 'css-rtl' : 'css';
    }
} // ./get_style_derection

if (!function_exists('get_flag_by_localization')) {
    function get_flag_by_localization($local)
    {
        $flag = '';
        switch ($local) {
            case 'en':
                $flag = 'gb';
                break;
            case 'ar':
                $flag = 'sa';
                break;
            case 'fr':
                $flag = 'fr';
                break;

            default:
                $flag = 'gb';
                break;
        }
        return $flag;
    }
} // ./get_flag_by_localization

if (!function_exists('upload_file')) {
    function upload_file($file, $disk, $folder_name = '')
    {
        $folder_name = empty($folder_name) ? '/' : $folder_name;
        $file_path = $file->store($folder_name, $disk);
        $file_name = $name = collect(explode('/', $file_path))->last();
        $file_type = $file->getMimeType();
        $file_size = $file->getSize();
        return $file_info = [
            'file_name' => $file_name,
            'file_path' => $file_path,
            'file_url' => config("filesystems.disks.$disk.url") . "/$file_path",
            'file_type' => $file_type,
            'file_size' => $file_size,
        ];
    }
} //upload_file

if (!function_exists('image_resize_from_storage')) {
    function image_resize_from_storage($file_path, $width, $hieght,  $save_to = null, $quality = 100)
    {
        $save_to = $save_to == null ? $file_path : $save_to;
        $image = \Image::make($file_path)->resize($width, $hieght, function ($constraint) {
            $constraint->aspectRatio();
        })->save($save_to, $quality);
    }
} //image_resize_from_storage

if (!function_exists('delete_disk_folder')) {
    function delete_disk_folder($disk, $folder_name)
    {
        Storage::disk($disk)->deleteDirectory($folder_name);
    }
} //delete_disk_folder

if (!function_exists('delete_storage_file')) {
    function delete_storage_file($disk, $file)
    {
        Storage::disk($disk)->delete($file);
    }
} //delete_storage_file

if (!function_exists('get_status')) {
    function get_status($status)
    {
        return $status ? __('general.active') : __('general.inactive');
    }
}//get_status
