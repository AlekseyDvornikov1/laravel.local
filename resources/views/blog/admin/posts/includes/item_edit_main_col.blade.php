@php
    /** @var  \App\Models\BlogPost $post*/
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
                            <input type="text" name="title" id="title" value="{{old('title',$post->title)}}"
                                   class="form-control" minlength="3" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Статья</label>
                            <textarea type="text" name="description" id="description" class="form-control"
                                      rows="13">{{old('content_raw',$post->content_raw)}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

