<?php

class BookController extends \BaseController {

	public function index() 
	{
		return  View::make('books.index');
	}

	public function show($id)
	{
		
	}
}