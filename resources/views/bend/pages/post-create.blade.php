@extends('bend.layouts.master')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-edit"></i> Add New Post</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Posts</li>
        <li class="breadcrumb-item"><a href="#">Add New Post</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-9 col-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control" type="text" placeholder="Write Your Title" name="title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Sub Title</label>
                                <input class="form-control" type="text" placeholder="Write Your Sub Title"
                                    name="sub_title">
                            </div>
                        </div>
                    </div>
                    <div class="content_area mb-4">
                        <textarea name="post_content" class="form-control" rows="3" id="post_content"></textarea>
                    </div>

                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Post Excerpt</label>
                                <textarea class="form-control" rows="3" placeholder="Write Your Excerpt"
                                    name="post_excerpt" id="post_excerpt"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-12">
                    <div class="tile">
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="publish" value="publish">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Publish
                            </button>
                            <button class="btn btn-primary" type="submit" name="draft" value="draft">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Draft
                            </button>
                        </div>
                    </div>

                    <div class="tile">
                        <h5>Select Category</h5>
                        <div class="tile-footer"></div>
                        <div class="tile-body">
                            <div class="form-group">
                                <div class="form-check sm_category_body">
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox" name="category_name[]" value="Category One">
                                            <span class="label-text">Category One</span>
                                        </label>
                                    </div>
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox" name="category_name[]" value="Category Two">
                                            <span class="label-text">Category Two</span>
                                        </label>
                                    </div>
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox" name="category_name[]" value="Category Three">
                                            <span class="label-text">Category Three</span>
                                        </label>
                                    </div>
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox" name="category_name[]" value="Category Four">
                                            <span class="label-text">Category Four</span>
                                        </label>
                                    </div>
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox" name="category_name[]" value="Category Five">
                                            <span class="label-text">Category Five</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile">
                        <h3 class="tile-title">Featured Image</h3>
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label" data-toggle="modal" data-target="#post_thumbnail">
                                    Set Featured Image
                                </label>
                                <div class="display_post_thumb">
                                </div>
                            </div>
                            <!-- The Modal -->
                            @includeIf('bend.modal.thumbnail', ['some' => 'data'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 col-12">
                    <div class="tile">
                        <div class="tile-title-w-btn border-bottom pb-1">
                            <h3 class="title">Custom Fields</h3>
                            <p>
                                <button class="btn btn-primary " type="button" id="create_meta_fields">
                                    <i class="fa fa-plus"></i>New Custom Field
                                </button>
                            </p>
                        </div>
                        <div class="tile-body" id="meta_container">
                            <div class="row" id="post_meta_section">
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control" name="meta_key[]" value="">
                                </div>
                                <div class="form-group col-sm-5">
                                    <textarea name="meta_value[]" id="" class="form-control" cols="30" rows="1">
                                    </textarea>
                                </div>
                                <div class="form-group col-sm-2">
                                    <button class="btn btn-primary remove_meta_fields" type="button">
                                        <i class="fa fa-fw fa-lg fa-trash mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection