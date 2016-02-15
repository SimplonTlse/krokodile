<?php

class Counter {

	public function all(){
		return ORM::for_table('counters')->find_many();
	}
	public function get($id){
		return ORM::for_table('counters')->find_one($id);
	}
	public function add(){}
	public function edit($id){}

	public function increment($id){}
}