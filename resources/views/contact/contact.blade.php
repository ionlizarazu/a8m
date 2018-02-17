@extends('index')
@section('title','Jarri gurekin harremanetan')
@section('description','Lasterketaren inguruan dituzun zalantza guztiak argitzeko aukera daukazu. Horretarako bete formularioa edota bidali mezu elektroniko bat antzuolako8m@gmail.com helbidera.')
@section('keywords', 'Antzuola kontaktua','mendi lasterketa kontaktua','a8m kontaktua','8 miliak kontaktua','zortzi miliak kontaktua','antzuolako 8 miliak kontaktua','antzuolako zortzi miliak kontaktua','antzuola lasterketa kontaktua','antzuola mendi lasterketa kontaktua','kontaktua')
@section('canonical','http://www.a8m.kodekoop.eus/kontaktua')
@section('header')
    @include('header.header')
@endsection
@section('content')
    @include('contact.partials.contact')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection

