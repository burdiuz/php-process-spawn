<?php
/**
 * Created by Oleg Galaburda on 13.12.15.
 */


namespace aw\data {
  interface IReadable {
    public function read(int $size = PHP_INT_MAX):string;

    public function isReadable():bool;
  }
}