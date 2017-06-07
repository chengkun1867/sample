<?php
function get_db_config()
{
    if (getenv('IS_IN_HEROKU'))
    {
        $Url = parse_url(getenv("DATEBASE_url"));

        return $db_config=[

            'connetion' => 'pgsql',
                'host' => $url["host"],
                'database'  => substr($url["path"], 1),
                'username'  => $url["user"],
                'password'  => $url["pass"],
        ];
    }else {
        return $db_config=[
            'connetion' => env('DB_CONNECTION', 'mysql'),
               'host' => env('DB_HOST', 'localhost'),
               'database'  => env('DB_DATABASE', 'forge'),
               'username'  => env('DB_USERNAME', 'forge'),
               'password'  => env('DB_PASSWORD', ''),
        ];
    }

}


?>
