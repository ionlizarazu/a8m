@extends('index')
@section('title','Argazki galeria')
@section('description', 'Hemen ikusi ahal izango dituzu Antzuolako 8 miliak lasterketan ateratako hainbat argazki. Lasterkariek igarotako gune desberdinetako irudiak ageri dira bertan, gune bakoitzeko sailkatuta.')
@section('keywords', 'Antzuola galeria','mendi lasterketa galeria','a8m galeria','8 miliak galeria','zortzi miliak galeria','antzuolako 8 miliak galeria','antzuolako zortzi miliak galeria', 'antzuola lasterketa galeria','antzuola mendi lasterketa galeria','mendi galeria','lasterketa galeria','galeria','Antzuola argazkiak','mendi lasterketa argazkiak','a8m argazkiak','8 miliak argazkiak','zortzi miliak argazkiak','antzuolako 8 miliak argazkiak','antzuolako zortzi miliak argazkiak', 'antzuola lasterketa argazkiak','antzuola mendi lasterketa argazkiak','mendi argazkiak','lasterketa argazkiak','argazkiak','Antzuola irudiak','mendi lasterketa irudiak','a8m irudiak','8 miliak irudiak','zortzi miliak irudiak','antzuolako 8 miliak irudiak','antzuolako zortzi miliak irudiak', 'antzuola lasterketa irudiak','antzuola mendi lasterketa irudiak','mendi irudiak','lasterketa irudiak','irudiak')
@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('galeria.partials.galeria')    
@endsection

@section('footer')
    @include('footer.footer')
@endsection

