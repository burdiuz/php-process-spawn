<?php
/**
 * Created by Oleg Galaburda on 13.12.15.
 */


namespace aw\data {

  interface IWritable {
    /**
     * @param $data Any kind of data, for now its string
     * @return mixed
     */
    public function write($data);

    public function isWritable():bool;
  }
}
