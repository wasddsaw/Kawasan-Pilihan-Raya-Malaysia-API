<?php

namespace PilihanRaya;

class PilihanRaya {
  public function constituencies() {
    $constituencies = file_get_contents( __DIR__ . '/../inc/constituencies.json' );
    return json_decode( $constituencies, true );
  }
}