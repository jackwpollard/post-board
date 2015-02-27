{!! Form::open(array('url' => 'posts')) !!}
<div class="form-group">
	{!! Form::label('post-title', 'Title') !!}
	{!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Enter post title')) !!}
</div>
<div class="form-group">
	{!! Form::label('post-content', 'Content') !!}
	{!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Write your post here', 'rows' => 5)) !!}
</div>
<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}