@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Antzuola izena eman','mendi lasterketa izena eman','a8m izena eman','8 milak izena eman','zortzi milak izena eman','antzuolako 8 milak izena eman','antzuolako zortzi milak izena eman', 'antzuola lasterketa izena eman','antzuola mendi lasterketa izena eman','mendi izena eman','lasterketa izena eman','izena eman','Antzuola inskripzioa','mendi lasterketa inskripzioa','a8m inskripzioa','8 milak inskripzioa','zortzi milak inskripzioa','antzuolako 8 milak inskripzioa','antzuolako zortzi milak inskripzioa', 'antzuola lasterketa inskripzioa','antzuola mendi lasterketa inskripzioa','mendi inskripzioa','lasterketa inskripzioa','inskripzioa','Antzuola parte hartu','mendi lasterketa parte hartu','a8m parte hartu','8 milak parte hartu','zortzi milak parte hartu','antzuolako 8 milak parte hartu','antzuolako zortzi milak parte hartu', 'antzuola lasterketa parte hartu','antzuola mendi lasterketa parte hartu','mendi parte hartu','lasterketa parte hartu','parte hartu')
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
