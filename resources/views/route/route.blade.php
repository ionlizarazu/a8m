@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Antzuola ibilbidea','mendi lasterketa ibilbidea','a8m ibilbidea','8 milak ibilbidea','zortzi milak ibilbidea','antzuolako 8 milak ibilbidea','antzuolako zortzi milak ibilbidea', 'antzuola lasterketa ibilbidea','antzuola mendi lasterketa ibilbidea','mendi ibilbidea','lasterketa ibilbidea','ibilbidea','Antzuola ruta','mendi lasterketa ruta','a8m ruta','8 milak ruta','zortzi milak ruta','antzuolako 8 milak ruta','antzuolako zortzi milak ruta', 'antzuola lasterketa ruta','antzuola mendi lasterketa ruta','mendi ruta','lasterketa ruta','ruta')
@section('canonical','http://www.a8m.kodekoop.eus/ibilbidea')

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('route.partials.route')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection
