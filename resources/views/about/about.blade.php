@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Antzuola','mendi lasterketa','a8m','8 milak','zortzi milak','antzuolako 8 milak','antzuolako zortzi milak','antzuola lasterketa','antzuola mendi lasterketa','guri buruz')

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
