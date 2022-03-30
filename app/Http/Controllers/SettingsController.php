<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        $setting = Setting::first();
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            'name' => "required",
            'copyright' => 'required',
        ]);
        
        
        $setting->name = $request->name;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->reddit = $request->reddit;
        $setting->email = $request->email;
        $setting->copyright = $request->copyright;
        $setting->description = $request->description;
        $setting->site_logo = $request->site_logo;

        if($request->hasFile('site_logo')){
            $image = $request->site_logo;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/setting/', $image_new_name);
            $setting->site_logo = '/storage/setting/' . $image_new_name;
        }

        $setting->save();

        Session::flash('success', 'setting updated successfully');
        return redirect()->back();

    }
}
