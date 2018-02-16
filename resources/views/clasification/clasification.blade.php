@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Antzuola sailkapena','mendi lasterketa sailkapena','a8m sailkapena','8 milak sailkapena','zortzi milak sailkapena','antzuolako 8 milak sailkapena','antzuolako zortzi milak sailkapena', 'antzuola lasterketa sailkapena','antzuola mendi lasterketa sailkapena','mendi sailkapena','lasterketa sailkapena','sailkapena')
@section('canonical','http://www.a8m.kodekoop.eus/sailkapena')

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('clasification.partials.clasification')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection
