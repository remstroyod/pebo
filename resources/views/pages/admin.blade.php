@extends('layouts.app')

@section('content')
    <section class="features-table">
        <div class="container-5">
            <div class="comparison-table">
                <div class="comparison-row-main">
                    <h3 class="comparison-title">{{ __('Нові заявки') }}</h3>
                </div>
                @if($ordersNew->count())
                    @foreach($ordersNew as $item)
                        <div class="comparison-row-second">
                            <div id="w-node-_9a58fa76-c4e6-2bdc-1060-c1ab46698530-5b7b99ea" class="comparison-negative grey">{{ $item->created_at->format('d.m') }}</div>
                            <div id="w-node-_3316d022-b4a7-ba97-711b-1a94def98a7c-5b7b99ea" class="comparison-negative">{{ $item->user->name }}</div>
                            <div id="w-node-_9a58fa76-c4e6-2bdc-1060-c1ab46698532-5b7b99ea" class="comparison-positive">{{ $item->user->phone }}</div>
                            <div id="w-node-_30af7c96-b122-1fb1-6df8-012427a2bbbd-5b7b99ea" class="comparison-positive">{{ $item->service->name }}</div>
                            <div id="w-node-fc58387b-a22a-e704-4474-7aa613da955e-5b7b99ea" class="comparison-positive">{{ $item->message }}</div>
                            <a href="{{ route('admin.order.update', ['order' => $item, 'status' => 2]) }}" class="button-primary approve w-button">{{ __('записати') }}</a>
                            <a href="{{ route('admin.order.update', ['order' => $item, 'status' => 0]) }}" class="button-primary delete w-button">{{ __('видалити') }}</a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="comparison-table margin-top">
                <div class="comparison-row-main">
                    <h3 class="comparison-title">{{ __('Оброблені') }}</h3>
                </div>
                @if($ordersAll->count())
                    @foreach($ordersAll as $item)
                        <div class="comparison-row-second second">
                            <div id="w-node-_945153ca-dd39-283e-4051-300d9e0866f4-5b7b99ea" class="comparison-negative grey">{{ $item->created_at->format('d.m') }}</div>
                            <div id="w-node-_945153ca-dd39-283e-4051-300d9e0866f6-5b7b99ea" class="comparison-negative">{{ $item->user->name }}</div>
                            <div id="w-node-_945153ca-dd39-283e-4051-300d9e0866f8-5b7b99ea" class="comparison-positive">{{ $item->user->phone }}</div>
                            <div id="w-node-_945153ca-dd39-283e-4051-300d9e0866fa-5b7b99ea" class="comparison-positive">{{ $item->service->name }}</div>
                            <div id="w-node-_945153ca-dd39-283e-4051-300d9e0866fc-5b7b99ea" class="comparison-positive">{{ $item->message }}</div>
                            <div id="w-node-_241e72d8-3820-11c7-2586-96364ebc9343-5b7b99ea" class="comparison-positive">{{ \App\Enums\OrderStatus::$name[$item->status] }}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
