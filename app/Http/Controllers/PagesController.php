<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PagesController extends Controller
{
	public function getIndex()
	{
		return view('pages.welcome')->withPosts(Post::all());
	}
	public function getAllPosts()
	{
		return view('partials._allPosts');
	}
	public function getAbout()
	{
		$first = "Santosh";
		$last = "Desai";
		$fullname = $first . " " . $last;
		$email = "santoshdesai12@hotmail.com";
		$data =[];
		$data['fullname'] = $fullname;
		$data['email'] = $email;
		return view('pages.about')->withData($data);
	}

	public function getContact()
	{
		return view('pages.contact');
	}
}

?>