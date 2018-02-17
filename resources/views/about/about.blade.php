@extends('index')
@section('title','Antzuolako 8 miliak')
@section('description', 'Antzuolako 8 miliak mendi lasterketaren webgunea. Guri buruzko informazioa duzue eskuragarri, lasterketa herrikoi honen inguruko datu guztiak ere bertan jasoko ditugu.')
@section('keywords', 'Antzuola','mendi lasterketa','a8m','8 miliak','zortzi miliak','antzuolako 8 miliak','antzuolako zortzi miliak','antzuola lasterketa','antzuola mendi lasterketa','guri buruz')

@section('canonical','http://www.a8m.kodekoop.eus')

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('about.partials.about')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection
