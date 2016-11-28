<?php 

	class PagesController
	{
		public function index()
		{
			$brendovi = Brand::all();
			$kategorije = Kategorija::all();
			$proizvodi = Proizvod::all();
			return view('index',compact('brendovi','kategorije','proizvodi'));
		}

		public function about()
		{
			return view('about');
		}

		public function contact()
		{
			return view('contact');
		}
		
	}


 ?>