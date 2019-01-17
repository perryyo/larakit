<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private $node='user';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::all();
        $node=$this->node;

        return view('dashboard.'.$this->node.'.list',compact('list','node'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.'.$this->node.'.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = User::create(['name' => $request->name]);
        $message='Added Successfully !';
        $node=$this->node;
        return view('dashboard.'.$this->node.'.add', compact('message','node'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row=User::find($id);
        $node=$this->node;
        return view('dashboard.'.$this->node.'.show' ,compact('row','node'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=User::find($id);
        $node=$this->node;
        return view('dashboard.'.$this->node.'.edit' ,compact('row','node'));


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
        $row = User::find($id);

        $row->name = $request->name;

        $row->save();

        return redirect('/admin/'.$this->node);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        $message='deleted successfully';
        return redirect('/admin/'.$this->node);
    }
    public function role($id)
    {
        $node=$this->node;
        $roles=Role::all();
        $user=User::find($id);
        return view('dashboard.'.$this->node.'.role', compact('user','node','roles'));
    }
    public function set_role(Request $request,$id)
    {
        $user=User::find($id);
        $user->assignRole('writer');


        $message='deleted successfully';
        return redirect('/admin/'.$this->node);
    }

    public function find($id)
    {
        return view('dashboard.'.$this->node.'.list');

    }

    public function searching($id)
    {
        return view('dashboard.'.$this->node.'.list');

    }

}
