<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="">
            <div class="lock-container">
                <section class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h1 class="margin-none">New Post</h1>
                    </div>
                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form role="form" action="{{ url('/new-post') }}" method="post" enctype="multipart/form-data"
                              novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="file" name="thumbnail" id="thumbnail"/>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input class="form-control" id="header" name="header" type="text"
                                           placeholder="Header">
                                    <label for="header">Header</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary text-right">Post
                                    <i class="fa fa-fw fa-unlock-alt"></i></button>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
