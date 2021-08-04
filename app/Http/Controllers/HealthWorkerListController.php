<?php

namespace App\Http\Controllers;

use App\Models\HealthWorkerList;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HealthWorkerListController extends Controller
{
    public function list()
    {
        $worker = HealthWorkerList::all();
        $ageLimit = Carbon::today()->subYears(18)->format('Y-m-d');
        return view('content.healthWorkerList', compact('worker', 'ageLimit'));
    }


    public function create(Request $request)
    {
        $file_name='';
        // step:1 check req has file

        if ($request->hasFile('Image')) {
            // file is valid?

            $file=$request->file('Image');
            if ($file->isvalid());
            {
        // generate unique file name

        $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

        // store image local directory

        $file->storeAs('photo', $file_name);
    }
        }


        $password="123456";

        $users=User::create([
                'role'=>'worker',
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($password)
            ]);

        // dd($users);
        HealthWorkerList::create([
            'User_Id' => $users->id,
            'reg_no'=>$request->reg_no,
            'dob' => $request -> dob,
            'Gender' => $request -> gender,
            'Contact_nbr' => $request -> contactnbr,
            'Email_Address' => $request -> email,
            'address' => $request -> address,
            'Vaccination_Area' => $request -> vaccinationArea,
            'file' => $file_name,

        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $workers = HealthWorkerList::find($id);
        $user = User::find($workers->User_Id);

        $workers->delete();

        $user->delete();

        return redirect()->back();
    }
}
