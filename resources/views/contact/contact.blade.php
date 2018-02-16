@extends('index')
@section('title','Kodekoop')
@section('description')
@lang('contact.description')
@endsection
@section('keywords', 'Antzuola kontaktua','mendi lasterketa kontaktua','a8m kontaktua','8 milak kontaktua','zortzi milak kontaktua','antzuolako 8 milak kontaktua','antzuolako zortzi milak kontaktua','antzuola lasterketa kontaktua','antzuola mendi lasterketa kontaktua','kontaktua')
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

