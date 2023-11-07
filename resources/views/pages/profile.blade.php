@extends('layouts.app')

@section('content')

    <section class="hero-heading-left-2">
        <div class="container-6">
            <div class="hero-wrapper">
                <div class="hero-split">
                    <h1 class="heading-20">👋 {{ $user->name }}, </h1>
                    <h1 class="heading-19">{{ __('вітаємо у приватному кабінеті!') }}</h1>
                </div>
                <div class="client-info block">
                    <div>
                        <h3 class="client-info-heading margin text-align-left">{{ __('Ваші данні') }}:</h3>
                        <div class="div-block-3 text-align-left">
                            <div id="w-node-c59703d7-9cc4-6f35-5a76-908f45f38bd3-517b99ec" class="text-block-4 margin-top---8">{{ __('Ім \'я') }}</div>
                            <div class="text-block-4 margin-top---8">{{ $user->name }}</div>
                            <div class="text-block-4 margin-top---8">{{ __('Телефон') }}</div>
                            <div class="text-block-4 margin-top---8">{{ $user->phone }}</div>
                            <div class="text-block-4 margin-top---8">{{ __('Дата народження') }}</div>
                            <div class="text-block-4 margin-top---8">{{ $user->date_of_birth }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-table">
        <div class="container-5">
            <div class="comparison-table margin-top">
                <div class="comparison-row-main">
                    <h3 class="comparison-title">{{ __('Ваші заявки') }}</h3>
                </div>
                @if($orders->count())
                    @foreach($orders as $item)
                        <div class="comparison-row-second second client">
                            <div id="w-node-_4a45721d-9673-2a59-6428-ed41b1eb3e92-517b99ec" class="comparison-negative grey">{{ $item->created_at->format('d.m') }}</div>
                            <div id="w-node-_4a45721d-9673-2a59-6428-ed41b1eb3e96-517b99ec" class="comparison-positive">{{ $user->phone }}</div>
                            <div id="w-node-_4a45721d-9673-2a59-6428-ed41b1eb3e98-517b99ec" class="comparison-positive">{{ $item->service->name }}</div>
                            <div id="w-node-_4a45721d-9673-2a59-6428-ed41b1eb3e9a-517b99ec" class="comparison-positive">{{ $item->message }}</div>
                            <div id="w-node-_4a45721d-9673-2a59-6428-ed41b1eb3e9c-517b99ec" class="comparison-positive">{{ \App\Enums\OrderStatus::$name[$item->status] }}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
