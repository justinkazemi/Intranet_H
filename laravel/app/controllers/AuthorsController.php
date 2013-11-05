<?php

class AuthorsController extends BaseController{

	public $restful = true;


	public function get_index(){



		return View::make('authors.index')
			->with('title', 'Authors and Books')
			->with('authors', Author::orderBy('name')->get());
	}

	public function get_view($id){
		return View::make('authors.view')
			->with('title', 'Author View Page')
			->with('author', Author::find($id));
	}

	public function get_new(){
		return View::make('authors.new')
			->with('title', 'Add New Author');

	}

	public function post_create(){

		$validation = Author::validate(Input::all());

		if($validation->fails()){
			return Redirect::to('authors/new')->withErrors($validation)->withInput();
		}else{

			Author::create(array(
				'name'=>Input::get('name'),
				'bio'=>Input::get('bio')
				));

			return Redirect::toRoute('authors')->with('message','the author was created Successfully!');
		}
	}


	public function edit($id){

		return View::make('authors.edit')
			->with('title', 'Edit Author')
			->with('author', Author::find($id));

	}

	public function update(){
		$id = Input::get('id');
		$validation = Author::validate(Input::all());
		if($validation->fails()){
			return Redirect::to('author/{id}/edit')->withErrors($validation)->withInput();
		}else{
			Author::where('id','=', $id)->update(array(
				'name'=> Input::get('name'),
				'bio'=> Input::get('bio')
				));
			return Redirect::to('author/{id}/edit');
		}
	}

	public function destroy(){
		Author::find(Input::get('id'))->delete();
		return Redirect::to('authors')
			->with('message','the author was deleted successfully!');
	}


}


?>