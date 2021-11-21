{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')



{{-- profile.blade.phpの@yield('title')に'PROFILEの課題'を埋め込む --}}
@section('title', 'プロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               
               <h2><strong>プロフィール</strong></h2>
               
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
                  <div class="form-group col-md-8">
                        <label class="col-md-8">氏名 (name)</label>
                        <div class="col-md-14">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                  </div>
            
                  <div class="form-group col-md-4">
                        <label class="col-md-8">性別 (gender)</label>
                        <div class="col-md-20">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>    
                  </div>
               </div>
                  
                 
               <div class="form-group row">
                  <div class="form-group col-md-8">
                        <label class="col-md-4">趣味 (hobby)</label>
                     <div class="col-md-20">
                        <textarea class="form-control form-control-lg" name="hoby" rows="5">{{ old('hoby') }}</textarea>
                     </div>
                  </div>
               </div>
               
               
               <div class="form-group row">  
                  <div class="form-group col-md-8">
                         <label class="col-md-8">自己紹介欄 (introduction)</label>
                     <div class="col-md-20">
                        <textarea class="form-control form-control-lg" name="introduction" rows="5">{{ old('introduction') }}</textarea>
                     </div>
                  </div> 
               </div>  
                 
                 
               <div class="form-group row">
                  <div class="form-group col-md-10">
                          <label class="col-md-2">画像</label>
                     <div class="col-md-20">
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