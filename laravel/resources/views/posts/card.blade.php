<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <i class="fas fa-user-circle fa-3x mr-1"></i>
    <div>
      <div class="font-weight-bold">
        {{$post->user->name}}
      </div>
      <div class="font-weight-lighter">
        {{ $post->created_at->format('Y/m/d H:i') }}
      </div>
    </div>

    @if( Auth::id() === $post->user_id )
      <!-- 記事更新と削除のdropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button type="button" class="btn btn-link text-muted m-0 p-2">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("posts.edit", ["post" => $post]) }}">
              <i class="fas fa-pen mr-1"></i>記事を更新する
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $post->id }}">
              <i class="fas fa-trash-alt mr-1"></i>記事を削除する
            </a>
          </div>
        </div>
      </div>
      <!--  記事更新と削除のdropdown -->

      <!-- 記事削除のmodal -->
      <div id="modal-delete-{{ $post->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $post->food }}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- 記事削除のmodal -->
    @endif

  </div>
  <div class="card-body pt-0">
    <div class="card-body pt-0 pb-2">
      <h3 class="h4 card-title">
        <a class="text-dark" href="{{ route('posts.show', ['post' => $post]) }}">
          {{$post->food}}
        </a>
      </h3>
      <a class="text-dark" href="{{ route('posts.show', ['post' => $post]) }}">
        <img class="img-fluid" src="{{ asset('img/23879131_m.jpg') }}" alt="">
      </a>
      <div class="card-text">
        {{$post->calorie}} 
      </div>
      <div class="card-text">
        {{$post->carbo}} 
      </div>
      <div class="card-text">
        {{$post->fat}} 
      </div>
      <div class="card-text">
        {{$post->protein}} 
      </div>
      <div class="card-text">
        {{$post->weight}} 
      </div>
    </div>
  </div>
</div>