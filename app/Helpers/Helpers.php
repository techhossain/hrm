<?php

namespace App\Helpers;

class Helpers{

  public function user_photo_url($user, $column ){

    $last_media_item = $user->getMedia($column)->reverse()->first();
    $file_name = $last_media_item->file_name;
    $media_id = $last_media_item->id;
    $media_url = sprintf("%s/%s/%s", asset('storage'), $media_id, $file_name);

    return $media_url;
  }

  public function user_photo_image($user, $column ){

    $media_item = $user->getMedia($column)->reverse()->first();

    return $media_item;
  }

  public static function instance(){
    return new Helpers();
  }   



}