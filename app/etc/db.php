<?php
return array(
  'production' => array(
    'type'        => 'MySQL',
    'connection'  => array(
      'host'        => 'localhost',
      'login'       => 'root',
      'password'    => '',
      'db'        => 'mydb',
    ),
  ),

  'development' => array(
    'type'          => 'MySQL',
    'connection'  => array(
      'host'      => 'localhost',
      'login'     => 'root',
      'password'  => '',
      'db'        => 'mydb',
    ),
  ),
);

/*;type = "couchdb"
;[connection]
;db = "mydb"
;host = "couchdb.somehost.org"
;login = "root"
;password = "" */

