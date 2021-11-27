@extends('layouts.profile')

@section('content')
    <div class="container">
      <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="d-flex flex-row" class="name">
                                <label>名前
                                    {{ str_limit($post->name, 150) }}
                                </label>
                                </div>
                                
                                <div class="d-flex flex-row" class="gender">
                                <label>性別
                                    {{ str_limit($post->gender, 150) }}
                                </label>
                                </div>
                                <div class="d-flex flex-row" class="hobby">
                                <label>趣味 
                                    {{ str_limit($post->hobby, 1500) }}
                                </label>
                                </div>
                                <div class="d-flex flex-row" class="introduction">
                                    <label>自己紹介欄
                                    {{ str_limit($post->introduction, 1500) }}
                                    </label>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection