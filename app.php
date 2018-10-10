<?php

class Youtube
{
    const SEARCH_URL = 'https://www.googleapis.com/youtube/v3/search';

    public static function getVideos()
    {
        $parameters = http_build_query([
            'part' => 'snippet', 
            //'channelId' => 'UChYlvy_xAa7V1peYo5bhLfg',
            'channelId' => 'UCqLDDXfOK8HsyZLUbUEtMgg',
            'type' => 'video',
            'order' => 'date',
            'key' => 'AIzaSyCQWI4iSLS7dj5lANm2BPplztFxJPVFC2M',
            'maxResults' => 50
        ]);

        return json_decode(file_get_contents(self::SEARCH_URL.'?'.$parameters));
    }
}
