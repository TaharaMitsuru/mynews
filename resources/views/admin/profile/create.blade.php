{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')



{{-- profile.blade.phpの@yield('title')に'PROFILEの課題'を埋め込む --}}
@section('title', 'プロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <h2>プロフィール</h2>
               <form action="{{ action('Admin\ProfileController@create') }}" method="post"
               enctype="multipart/form-data">
                  
                  @if (count($errors) > 0 )
                  <ul>
                     @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                     @endforeach
                  </ul>
                  @endif
               <div class="form-gropu row">
                  <div class="form-group col-md-7">
                        <label class="col-md-4">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                  </div>
            
                  <div class="form-group col-md-5">
                        <label class="col-md-4">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>    
                  </div>
               </div>
                  
                 
               <div class="form-group row">
                  <div class="form-group col-md-8">
                        <label class="col-md-4">趣味</label>
                     <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                     </div>
                  </div>
               </div>
               
               
               <div class="form-group row">  
                  <div class="form-group col-md-8">
                         <label class="col-md-4">自己紹介欄</label>
                     <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                     </div>
                  </div> 
               </div>  
                 
                 
               <div class="form-group row">
                  <div class="form-group col-md-10">
                          <label class="col-md-2">画像</label>
                     <div class="col-md-10">
                          <input type="file" class="form-control-file" name="image">
                     </div>
                  </div>
               </div>
                  {{ csrf_field() }}
                  
                     <input type="submit" class="btn btn-primary"  value="更新">
               </form>
           </div>
       </div>
   </div>
@endsection   