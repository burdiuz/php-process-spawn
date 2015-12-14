<?php

/**
 * Created by Oleg Galaburda on 14.12.15.
 */

namespace aw\streams {

  interface IReadableStreamWrapper {

    /**
     * Tests for end-of-file on a file pointer
     * @return bool
     */
    public function stream_eof():bool;

    /**
     * Read from stream
     */
    public function stream_read();
  }
}
