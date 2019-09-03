@php
    /** @var  \App\Models\BlogCategory $item*/
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" id="title" value="{{old('title',$item->title)}}"
                                   class="form-control" minlength="3" required>
                        </div>

                        <div class="form-group">
                            <label for="slug">Идентификатор</label>
                            <input type="text" name="slug" id="slug" value="{{old('slug',$item->slug)}}"
                                   class="form-control" minlength="3">
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Родитель</label>
                            <select type="parent_id"
                                    name="parent_id"
                                    id="title"
                                    class="form-control"
                                    placeholder="Выбирите категорию"
                                    required>
                                @foreach($categoryList as $category)
                                    <option value="{{$category->id}}"
                                            @if($category->id == $item->parent_id) selected @endif>
                                        {{$category->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea type="text" name="description" id="description" class="form-control"
                                      rows="3">{{old('description',$item->description)}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

