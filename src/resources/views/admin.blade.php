@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="todo__content">
    <div class="section__title">
        <h2>Admin</h2>
    </div>
    <form class="search-form"action="/todos/search" method="get">
    @csrf
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}"/>
            <select class="search-form__item-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
    </div>
    {{ $authors->links() }}
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">
                    <span class="todo-table__header-span">Todo</span>
                    <span class="todo-table__header-span">カテゴリ</span>
                </th>
            </tr>
            @foreach ($todos as $todo)
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="update-form" action="/todos/update" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="{{ $todo['content'] }}">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        </div>
                        <div class="update-form__item">
                            <p class="update-form__item-p">{{ $todo['category']['name'] }}</p>
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="delete-form" action="/todos/delete" method="post">
                        @method('delete')
                        @csrf
                        <div class="delete-form__button">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection