<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$address = User::address(Auth::User()->id)->first();
		return view('website.profile', compact("address"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

	}
	public function editProfileForm() {
		$address = User::address(Auth::User()->id)->first();
		return view('website.editProfile', compact('address'))->with('data', Auth::user());
	}

	public function store(Request $request) {

	}

	public function show($id = "") {
		return view('website.profile');
	}

	public function edit() {
		$address = User::address(Auth::User()->id)->first();
		return view('website.edit-profile', compact('address'))->with('data', Auth::user());
	}

	public function update(Request $request) {
		$user_id = Auth::user()->id;
		if ($request->hasFile('avatar')) {
			$file = $request->file('avatar');
			$filename = $file->getClientOriginalName();
			$filename = $file->store('users');
			DB::table('users')->where('id', $user_id)->update(['avatar' => $filename]);
		}

		if (Input::get('gender') == 'Female') {
			$gender = 'f';
		} elseif (Input::get('gender') == 'Male') {
			$gender = 'm';
		}

		DB::table('users')->where('id', $user_id)->update(['name' => $request->name, 'birthdate' => $request->birthdate, 'gender' => $gender, 'phone' => $request->phone]);

		$us = DB::table('address')->where('users_id', '=', $user_id)->get()->first();

		if (!is_null($us)) {
			DB::table('address')->
				where('users_id', $user_id)->
				update(['City' => $request->City, 'Country' => $request->Country, 'Street' => $request->Street]);
		} else {
			$add = new Address;
			$add->users_id = $user_id;
			$add->Street = $request->Street;
			$add->City = $request->City;
			$add->Country = $request->Country;
			$add->save();

		}

		return redirect()->route('profile');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
