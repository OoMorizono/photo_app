@extends('layouts.main')
@section('title', '一覧画面')
@section('content')
@include('partial.flash')
@include('partial.errors')
<section class="row" data-masonry='{ "percentPosition": true }'>
    @foreach ($articles as $article)
    <div class="col-6 col-md-4 col-lg-3 col-sl-2 mb-4">
        <article class="card position-relative">
            <img src="{{ $article->image_url }}" class="card-img-top">
            <div class="card-title mx-3">
                <a href="{{ route('articles.show', $article) }}" class="text-decoration-none stretched-link">
                    {{ $article->caption }}
                </a>
            </div>
        </article>
    </div>
    @endforeach
</section>
<a href="{{ route('articles.create') }}" class="position-fixed fs-1 bottom-0 end-0" style="color:#ff00d4;">
    <i class="fas fa-plus-circle"></i>
</a>
@endsection