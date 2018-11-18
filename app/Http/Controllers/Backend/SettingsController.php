<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;

class SettingsController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function settingShow() {
         $settingeInfo = Settings::first();
        if(!empty($settingeInfo)) {
            return view('pages.settings.settings', compact('settingeInfo'));
        }else{
            return null;
        }
    }

    public function ManageSettings(Request $request){
        $settingsId = $request->input('id');

        if(!empty($settingsId)) {
            //Logo check in update
            if(!empty($request->file('com_logo'))) {
                //logo Image updateing
                $photoFile = $request->file('com_logo');
                $fileExtension = $photoFile->getClientOriginalExtension();
                $filename = str_random(20).".".$fileExtension;
                $destinationPath = 'assets/settings/';
                $uploaded = $photoFile->move($destinationPath, $filename);
                //include model class PreviousTeachers
                $settingData = Settings::findOrFail($settingsId);
                $settingData->com_logo =$filename;
            }
            //class model include
            $settingData = Settings::findOrFail($settingsId);
            $settingData->com_name =$request->input('com_name');
            $settingData->com_email =$request->input('com_email');
            $settingData->com_number =$request->input('com_number');
            $settingData->com_address =$request->input('com_address');
            // insert check & success message
            if($settingData->save()){
                Session::flash('success', 'Settings updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            }
        }

    }

}
