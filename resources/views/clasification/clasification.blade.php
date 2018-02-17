@extends('index')
@section('title','Sailkapenak')
@section('description', 'Antzuolako 8 miliak lasterketako azken urteetako sailkapen guztiak hemen ditugu denon eskura. Datuak ordenatu eta nahi duzun formatuan taula deskargatzeko aukera ere badaukagu.')
@section('keywords', 'Antzuola sailkapena','mendi lasterketa sailkapena','a8m sailkapena','8 miliak sailkapena','zortzi miliak sailkapena','antzuolako 8 miliak sailkapena','antzuolako zortzi miliak sailkapena', 'antzuola lasterketa sailkapena','antzuola mendi lasterketa sailkapena','mendi sailkapena','lasterketa sailkapena','sailkapena')
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
