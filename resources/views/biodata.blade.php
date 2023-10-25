@extends('master')
@section('nama_title',$nama)
@section('nama_heading',$nama)
@section('bio',$biodata)

@section('hobby')
@forelse ($hobby as $item)
    <li>{{$item}}</li>
    
@empty
    Tidak Mempunyai Hobby
    
@endforelse
@endsection