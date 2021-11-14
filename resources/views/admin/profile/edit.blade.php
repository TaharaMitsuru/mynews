{{-- layout/edit.blade.phpを読み込む --}}
@extends('layouts.edit')


{{-- edit.blade.phpの@yied('title')に'EDIT課題'を埋め込む --}}
@section('title', 'EDITの課題2')

{{-- edit.blade.phpの@yield('content')に以下のタグを埋め込む --}}

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <h2>EDITの課題2</h2>
          </div>
      </div>
  </div>
@endsection  