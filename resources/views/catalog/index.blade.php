@extends('layout.site', ['title' => 'Каталог товаров'])

@section('content')
    <h1>Каталог товаров</h1>

    <p>
        Добро пожаловать в наш каталог товаров! Здесь вы найдете обширный выбор компьютеров и комплектующих, тщательно отобранных для удовлетворения всех ваших потребностей. Мы предлагаем продукцию от ведущих производителей и гарантируем высокое качество каждой единицы. В нашем каталоге вы найдете:
    </p>
    <ul>
        <li>Настольные компьютеры для работы и развлечений.</li>
        <li>Игровые компьютеры с мощными характеристиками для самых требовательных геймеров.</li>
        <li>Ноутбуки для работы, учебы и повседневных задач.</li>
        <li>Игровые ноутбуки для захватывающих игр и максимальной производительности на ходу.</li>
        <li>Моноблоки для тех, кто ценит стиль и удобство.</li>
    </ul>
    <p>
        Каждый товар сопровождается подробным описанием, чтобы вы могли сделать осознанный выбор. Наши специалисты всегда готовы помочь вам с консультацией и ответить на все ваши вопросы. Погрузитесь в мир технологий с нашим каталогом и найдите идеальное решение для себя!
    </p>
    <h2 class="mb-4">Разделы каталога</h2>
    <div class="row">
        @foreach ($roots as $root)
            @include('catalog.part.category', ['category' => $root])
        @endforeach
    </div>

    <h2 class="mb-4">Популярные бренды</h2>
    <div class="row">
        @foreach ($brands as $brand)
            @include('catalog.part.brand', ['brand' => $brand])
        @endforeach
    </div>
@endsection


