<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workorders;
use App\Workordertype;
use App\User as User;
use Auth as Auth;

class EmailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  User::find(Auth::user()->id);

		return view('mailbox.index',compact('user'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {		
        $this->validate(
		$request,[
		'wo_num' =>'required',
		'c_name' =>'required',
		'address'=>'required',
		'relay' =>'required',
		'relayed2' =>'required'
		],
		['relayed2.required' => 'Relayed to is required'],
		['relay.required' => 'Relay date/time is required']);
		
		$date = str_replace('/', '-', $request->get('relay') );
		$newDate = date("Y-m-d", strtotime($date));
		
			
		$input_data = [
			'user_id' => 1, //update to creator/user
			'workordertype_id' =>	$request->get('wo_num'),
			'customer_name' => $request->get('c_name'),
			'customer_address'  =>$request->get('address'),
			'customer_contact' => $request->get('contact'),
			'relay_timestamp' => $newDate." ".$request->get('timepicker2'),
			'recipient' => $request->get('relayed2')
		];
		
		if(!is_null($request->get('creation_date'))){
			$date = str_replace('/', '-', $request->get('creation_date') );
			$newDate = date("Y-m-d", strtotime($date));	
			$input_data['creation_timestamp'] = $newDate." ".$request->get('timepicker');
		}
		
		$workorder = new Workorders($input_data);		
		$workorder->save();
		
		return redirect()->route('workorders.create')->with('success','Workorder Added');
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workorder = new Workorders();		
		$workorder->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	public function woname($id)
    {
        $workorder = new Workorders();		
		$workorder->get();
    }
}
