<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use \App\Contact;

class ContactController extends Controller
{
	/**
		* Show the profile for the given user.
		*
		* @param  int  $id
		* @return View
		*/
	public function index(Request $request)
	{
		$headers = Schema::getColumnListing('contacts');
		$hDisplay = array();
		$sort = $request->query("sort");
		$by = $request->query("sort_by", "asc");

		if (empty($sort) || !in_array($sort, $headers))
		{
			$contacts = Contact::paginate(5); //DB::table('contacts')->paginate(5); // Contact::paginate(10);
		}
		else
		{
			$contacts = Contact::orderBy($sort, $by)->paginate(5);
		}

		/** @var
		 * Update
		$contact = Contact::find(1);
		$contact->first_name = "Jacob";
		$contact->save();
		*/

		foreach ($headers as $h)
		{
			if ($h === "created_at" || $h === "updated_at" || $h === "id")
			{
				continue;
			}

			$pieces = explode("_", $h);
			$name = "";
			$order = "";

			if (count($pieces) > 1)
			{
				foreach ($pieces as $p)
				{
					$name .= (empty($name) ? "" : " ") . ucfirst($p);
				}
			}
			else
			{
				$name = ucfirst($h);
			}

			if ($h === $sort)
			{
				$order = $by === "desc" ? "asc" : "desc";
			}

			array_push($hDisplay, [ 'key' => $h, 'display' => $name, 'order' => $order ]);
		}

		return view('home', [
			'contacts' => $contacts,
			'headers' => $hDisplay,
			'sort' => $sort,
			'by' => $by,
		]);
	}
}
