@extends('bend.layouts.master')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-edit"></i> Add New Posts</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Posts</li>
        <li class="breadcrumb-item"><a href="#">Add New Post</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-12">
        <form>
            <div class="row">
                <div class="col-sm-8 col-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control" type="text" placeholder="Write Your Title" name="title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Sub Title</label>
                                <input class="form-control" type="text" placeholder="Write Your Sub Title">
                            </div>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Post Content</label>
                                <textarea class="form-control" rows="4" placeholder="Write Your Content"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Post Excerpt</label>
                                <textarea class="form-control" rows="3" placeholder="Write Your Excerpt"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-12">
                    <div class="tile">
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Publish
                            </button>
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Draft
                            </button>
                        </div>
                    </div>

                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender">Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender">Female
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">I accept the terms and
                                        conditions
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Upload Your Thumbnail</label>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection