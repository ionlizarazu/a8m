@extends('index')
@section('title','Kodekoop')
@section('description')
@lang('contact.description')
@endsection
@section('keywords', 'Trabajos web','Creador web','Paginas web','Diseñador web,Diseño web,Angular,Laravel,PHP,Bootstrap,HTML5,CSS3,JavaScript,Jquery,Freelance,Web Freelancer,SEO,Email marketing,SEO,PPC,Banner, Desarrollador Web, Desarrollo Web')

@section('header')
    @include('header.header')
@endsection
@section('content')
    @include('contact.partials.contact')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection

