<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $post->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $post->title !!}</p>
</div>

<!-- Post Date Field -->
<div class="form-group">
    {!! Form::label('post_date', 'Post Date:') !!}
    <p>{!! $post->post_date !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $post->body !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $post->email !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $post->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $post->updated_at !!}</p>
</div>

