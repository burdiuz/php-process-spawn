<?php

/**
 * Created by Oleg Galaburda on 14.12.15.
 */
interface IFileStream {
  /**
   * Advisory file locking
   */
  public function stream_lock();

  /**
   * Retrieve information about a file resource
   */
  public function stream_stat();

  /**
   * Delete a file
   */
  public function unlink();

  /**
   * Retrieve information about a file
   */
  public function url_stat();
}