@php
    /** @var  \App\Models\BlogPost $post*/
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if($post->is_published)
                    Опубликовано
                @else
                    Черновик
                @endif
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#adddata" role="tab">Доп. данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" id="title" value="{{old('title',$post->title)}}"
                                   class="form-control" minlength="3" required>
                        </div>

                        <div class="form-group">
                            <label for="content_raw">Статья</label>
                            <textarea type="text" name="content_raw" id="content_raw" class="form-control"
                                      rows="13">{{old('content_raw',$post->content_raw)}}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane" id="adddata" role="tabpanel">
                        <div class="form-group">
                            <label for="category_id">Категория</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categoryList as $categoryOption)
                                <option value="{{$categoryOption->id}}"
                                        @if($categoryOption->id == $post->category_id) selected @endif >
                                    {{$categoryOption->title}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slug">Идентификатор</label>
                            <input type="text" value="{{$post->slug}}"
                                   name="slug"
                                   id="slug"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Выдержка</label>
                            <textarea type="text"
                                      name="excerpt"
                                      id="excerpt"
                                      class="form-control"
                                      rows="3" >{{old('excerpt',$post->excerpt)}} </textarea>
                        </div>

                        <div class="form-check p-0">
                            <input type="hidden"
                                   name="is_published"
                                   id="is_published"
                                   value="0">

                            <input type="checkbox"
                                   name="is_published"
                                   id="is_published"
                                   value="1"
                                   @if($post->is_published)
                                   checked
                                   @endif>
                            <label for="is_published" class="form-check-label">Опубликовано</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

