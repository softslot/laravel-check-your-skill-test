<!-- TODO Blade Задание 2: Изменить реализацию этой view, расширить ее с использованием layout  -->
<!-- layouts/app.blade.php  -->
@extends('layouts.app')

<!-- TODO Blade Задание 6: В эту view с контроллера передается collection c users в переменной data -->
<!-- Выполнить foreach loop в одну строку -->
<!-- Используйте view shared/user.blade.php для item (переменная user во item view) -->
<!-- Используйте view shared/empty.blade.php для состояния когда нет элементов в колекции -->
@section('content')
    @if ($data->isEmpty())
        @include('shared.empty')
    @else
        @foreach ($data as $user)
            @include('shared.user')
        @endforeach
    @endif

    <!-- TODO Blade Задание 7: Здесь сделайте классический foreach loop -->
    <!-- Выведите div с $user->name -->
    <!-- Воспользуйтесь переменной $loop и у нечетных div выведите класс - bg-red-500 -->
    @if ($data->isNotEmpty())
        @foreach ($data as $user)
            <div>{{ $user->name }}</div>
        @endforeach
    @endif
@endsection
