@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Antzuola galeria','mendi lasterketa galeria','a8m galeria','8 milak galeria','zortzi milak galeria','antzuolako 8 milak galeria','antzuolako zortzi milak galeria', 'antzuola lasterketa galeria','antzuola mendi lasterketa galeria','mendi galeria','lasterketa galeria','galeria','Antzuola argazkiak','mendi lasterketa argazkiak','a8m argazkiak','8 milak argazkiak','zortzi milak argazkiak','antzuolako 8 milak argazkiak','antzuolako zortzi milak argazkiak', 'antzuola lasterketa argazkiak','antzuola mendi lasterketa argazkiak','mendi argazkiak','lasterketa argazkiak','argazkiak','Antzuola irudiak','mendi lasterketa irudiak','a8m irudiak','8 milak irudiak','zortzi milak irudiak','antzuolako 8 milak irudiak','antzuolako zortzi milak irudiak', 'antzuola lasterketa irudiak','antzuola mendi lasterketa irudiak','mendi irudiak','lasterketa irudiak','irudiak')
@section('canonical','http://www.a8m.kodekoop.eus/galeria/2017')

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('galeria.partials.galeria')    
@endsection

@section('footer')
    @include('footer.footer')
@endsection

