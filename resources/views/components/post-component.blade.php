<div>
    <div class="card-header text-center">
        <h1> All Posts </h1>
        @if(Session::has('post_created'))
            <div class="alert alert-success" role="alert">{{Session::get('post_created')}}</div>
        @endif
        @if(Session::has('post_updated'))
            <div class="alert alert-success" role="alert">{{Session::get('post_updated')}}</div>
        @endif
        @if(Session::has('post_deleted'))
            <div class="alert alert-danger" role="alert">{{Session::get('post_deleted')}}</div>
        @endif
    </div>
</div>
