<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\merchantProfile;
class ApiController extends Controller
{
    public function merchantprofile(Request $request)
    {
    
        $image = $request->file('image');
        $profile = time().'.'.$image->getClientOriginalExtension();
        $destinationpath = public_path('/images');
        $image->move($destinationpath,$profile);
$new= new merchantProfile();

$new->image=$profile;
$new->name=$request->name;
$new->email=$request->email;
$new->phone=$request->phone;
$new->address=$request->address;
$new->company=$request->company;


$new->title=$request->title;
$new->website=$request->website;
$new->save();

    }
}
