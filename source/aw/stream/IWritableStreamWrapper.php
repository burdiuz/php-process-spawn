<?php

/**
 * Created by Oleg Galaburda on 14.12.15.
 */

namespace aw\streams {

  interface IWritableStreamWrapper {

    /**
     * Flushes the output
     */
    public function stream_flush();

    /**
     * Write to stream
     * @param $data
     */
    public function stream_write($data);
  }
}