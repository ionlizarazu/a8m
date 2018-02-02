@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Trabajos web','Creador web','Paginas web','Diseñador web,Diseño web,Angular,Laravel,PHP,Bootstrap,HTML5,CSS3,JavaScript,Jquery,Freelance,Web Freelancer,SEO,Email marketing,SEO,PPC,Banner, Desarrollador Web, Desarrollo Web')
{{-- @section('canonical','http://www.creadoreswebs.es')--}}

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    @include('route.partials.route')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection
