<?php


interface FindData {
    public function findAll();
    public function findByID($id);
    public function findByGroup($group);
}
