@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            Contact Form
        </a>
    </div>
</header>

<main>
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございます</h2>
        </div>
    </div>
@endsection