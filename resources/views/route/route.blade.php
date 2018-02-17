@extends('index')
@section('title','Lasterketako ibilbidea')
@section('description', 'Hemen dituzu Antzuolako 8 miliak lasterketako ibilbidearen nondik norakoak. Wikiloc atariko informazioaz baliatuta, ikusgai dago ibilbidea eta honen altimetria.')
@section('keywords', 'Antzuola ibilbidea','mendi lasterketa ibilbidea','a8m ibilbidea','8 miliak ibilbidea','zortzi miliak ibilbidea','antzuolako 8 miliak ibilbidea','antzuolako zortzi miliak ibilbidea', 'antzuola lasterketa ibilbidea','antzuola mendi lasterketa ibilbidea','mendi ibilbidea','lasterketa ibilbidea','ibilbidea','Antzuola ruta','mendi lasterketa ruta','a8m ruta','8 miliak ruta','zortzi miliak ruta','antzuolako 8 miliak ruta','antzuolako zortzi miliak ruta', 'antzuola lasterketa ruta','antzuola mendi lasterketa ruta','mendi ruta','lasterketa ruta','ruta')
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
