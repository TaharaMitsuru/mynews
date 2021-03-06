<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileHistory;
use Carbon\Carbon;

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
        
        
        //フォームから送信されてきた_tokenを削除する。
        unset($form['_token']);
        
         //データベースに保存する
        $profile->fill($form);
        $profile->save();
        
        // admin/profile/createにリダイレクトする
        return redirect('admin/profile/create');
        
    }
    
    public function edit(Request $request)
    {
        // News Modelからデータを取得する
      $profile = Profile::find($request->id);

      return view('admin.profile.edit', ['profile_form' => $profile]);
        
        
    }
    
    public function update(Request $request)
    {
        // Validationをかける
      $this->validate($request, Profile::$rules);
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      unset($profile_form['_token']);

      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      
      //ProfileHistorymodelにCarbonを実装
      $profile_history = new ProfileHistory();
      $profile_history->profile_id = $profile->id;
      $profile_history->edited_at = Carbon::now();
      $profile_history->save();

      return redirect('admin/profile/');
    }
}
