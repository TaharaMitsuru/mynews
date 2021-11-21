<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    //以下に追記
    public function add()
    {
        return view('admin/profile/create');
        
    }

    public function create(Request $request)
    {
        //以下を追記する
        //Varidationを行う
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        //フォームから画像が送信してきたら、保存して、$profiles->image_passに画像のパスを保存する
        
        if (isset($form['image'])){
            $path = $request->file('image')->store('public/image');
            $profile->image_pass = basename($path);
        }   else{
            $profile->image_pass = null;
        }
        
        //フォームから送信されてきた_tokenを削除する。
        unset($form['_token']);
        //フォームから送信されてきたimageを削除する。
        unset($form['image']);
        
        //データベースに保存する
        $profile->fill($form);
        $profile->save();
        
        // admin/profile/createにリダイレクトする
        return redirect('admin/profile/create');
        
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
