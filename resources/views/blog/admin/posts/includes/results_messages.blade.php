@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('success')}}
                @if (session('restore'))
                    <a href="{{route('blog.admin.posts.restore', session()->get('restore'))}}"
                       class="btn">Восстановить</a>
                @endif
            </div>
        </div>
    </div>
@endif
@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </div>
        </div>
    </div>
@endif
