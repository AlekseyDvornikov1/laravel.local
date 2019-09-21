@extends('layouts.app')

@section('content')
    <div class="container">
        @include('blog.admin.posts.includes.results_messages')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar">
                    <a class="btn btn-primary" href="{{route('blog.admin.posts.create')}}">Написать</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Автор</th>
                                <th scope="col">Категория</th>
                                <th scope="col">Заголовок</th>
                                <th scope="col">Дата публикации</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $post)
                                @php
                                /** @var \App\Models\BlogPost $post */
                                @endphp
                                <tr @if(!$post->is_published) style="background-color: #ccc;" @endif>
                                    <td>
                                        {{$post->id}}
                                    </td>
                                    <td>
                                        {{$post->user->name}}
                                    </td>
                                    <td>
                                        {{$post->category->title}}
                                    </td>
                                    <td>
                                        <a href="{{route('blog.admin.posts.edit',$post->id)}}">{{$post->title}}</a>
                                    </td>
                                    <td>
                                        {{$post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d. M H:i') : ''}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($paginator->total() > $paginator->count())
            <div class="row justify-content-center">
                <nav class="navbar">
                    {{$paginator->links()}}
                </nav>
            </div>
        @endif
    </div>
@endsection

