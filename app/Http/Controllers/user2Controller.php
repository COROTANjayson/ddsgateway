<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use DB; 

	Class UserController extends Controller {
		use ApiResponser; 

		private $request;
	
		public function __construct(Request $request){
			
			$this->request = $request;
		}

		public function show(){
			
		}

		public function add(Request $request){
			
		}

		public function index($id){
			
			
		}

		public function update(Request $request, $id){

		}

		public function delete($id){
			
		}
		

		
	}
