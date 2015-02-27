{!! Form::open(array('url' => 'comments', 'class' => 'form-horizontal ')) !!}
<div class="form-group form-new-comment">
	{!! Form::hidden('post_id', $post->id) !!}
	{!! Form::text('content', null, array('class' => 'form-control', 'placeholder' => 'Leave a comment')) !!}
	{!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
</div>
{!! Form::close() !!}