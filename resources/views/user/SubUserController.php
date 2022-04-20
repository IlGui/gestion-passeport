<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use DataTables;


use Hash;

use Illuminate\Support\Facades\Auth;

class SubUserController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.sub_user');
    }

    public function listusers()
    {
        $datas = user::all();
        return view("user.manageusers", compact("datas"));
    }

    public function edituser($id)
    {
        $data = user::find($id);
        return view("user.edituser", compact("data"));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect('manageusers');
    }

    public function updateduser(Request $request, $id)
    {
        $data = user::find($id);
        $data->name=$request->name;
        $data->telephone=$request->telephone;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->type=$request->type;

        $data->save();
        return redirect('manageusers');
        
    }


    public function account()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('user.account', compact('data'));
    }
    
    function fetch_all(Request $request)
    {
        if($request->ajax())
        {
            $data = user::where('state', '=', '0')->get();
            

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="/manageusers/edit/'.$row->id.'" class="btn btn-primary btn-sm">Edit</a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'">Delete</button>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    function add()
    {
        return view('user.add_sub_user');
    }

    function add_validation(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'telephone'         =>  'required',
            'email'         =>  'required|email|unique:users',
            'password'      =>  'required|min:3',
            'type'      =>  'required'
        ]);

        $data = $request->all();

        User::create([
            'name'      =>  $data['name'],
            'telephone'     =>  $data['telephone'],
            'email'     =>  $data['email'],
            'password'  =>  Hash::make($data['password']),
            'type'      =>  $data['type'],
            'state'      =>  '0'
        ]);

        return redirect('manageusers')->with('success', 'New User Added');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('user.edit_sub_user', compact('data'));
    }

    function edit_validation(Request $request)
    {
        $request->validate([
            'email'     =>  'required|email',
            'telephone'      =>  'required',   
            'name'      =>  'required'   
        ]);

        $data = $request->all();

        if(!empty($data['password']))
        {
            $form_data = array(
                'name'  => $data['name'],
                'telephone'  => $data['telephone'],
                'email'  => $data['email'],
                'password' => Hash::make($data['password'])
            );
        }
        else
        {
            $form_data = array(
                'name'      =>  $data['name'],
                'telephone'      =>  $data['telephone'],
                'email'     =>  $data['email']
            );
        }

        User::whereId($data['hidden_id'])->update($form_data);

        return redirect('user.manageusers')->with('success', 'User Data Updated');

    }

    function delete($id)
    {
        $data = User::findOrFail($id);

        $data->delete();

        return redirect('user.manageusers')->with('success', 'User Data Removed');
    }
}
