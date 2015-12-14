<?php
/**
 * Created by Oleg Galaburda on 14.12.15.
 */


namespace aw\streams {

  interface IStreamWrapper {

    /**
     * Opens file or URL
     */
    public function stream_open();

    /**
     * Close a resource
     */
    public function stream_close();

    /**
     * Seeks to specific location in a stream
     * @param int $position
     */
    public function stream_seek(int $position);

    /**
     * Retrieve the underlaying resource
     */
    public function stream_cast();

    /**
     * Change stream options
     */
    public function stream_metadata();

    /**
     * Change stream options
     */
    public function stream_set_option();

    /**
     * Retrieve the current position of a stream
     */
    public function stream_tell():int;

    /**
     * Truncate stream
     */
    public function stream_truncate($start = 0, $position = PHP_INT_MAX);
  }
}
