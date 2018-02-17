@extends('index')
@section('title','Izen ematea')
@section('description', 'Hemen duzu Antzuolako 8 miliak lasterketan izena emateko baldintzen informazioa. Parte hartu eta gozatu gurekin batera Antzuolako paisaia eder eta giro paregabeaz.')
@section('keywords', 'Antzuola izena eman','mendi lasterketa izena eman','a8m izena eman','8 miliak izena eman','zortzi miliak izena eman','antzuolako 8 miliak izena eman','antzuolako zortzi miliak izena eman', 'antzuola lasterketa izena eman','antzuola mendi lasterketa izena eman','mendi izena eman','lasterketa izena eman','izena eman','Antzuola inskripzioa','mendi lasterketa inskripzioa','a8m inskripzioa','8 miliak inskripzioa','zortzi miliak inskripzioa','antzuolako 8 miliak inskripzioa','antzuolako zortzi miliak inskripzioa', 'antzuola lasterketa inskripzioa','antzuola mendi lasterketa inskripzioa','mendi inskripzioa','lasterketa inskripzioa','inskripzioa','Antzuola parte hartu','mendi lasterketa parte hartu','a8m parte hartu','8 miliak parte hartu','zortzi miliak parte hartu','antzuolako 8 miliak parte hartu','antzuolako zortzi miliak parte hartu', 'antzuola lasterketa parte hartu','antzuola mendi lasterketa parte hartu','mendi parte hartu','lasterketa parte hartu','parte hartu')
@section('canonical','http://www.a8m.kodekoop.eus/izen-ematea')

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('inscription.partials.inscription')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection
