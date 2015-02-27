<div class="comment-container">
	<div class="comment-like-dislike">
		<a class="data-remote" data-type="comment" data-type-id="{{$comment->id}}" data-type-value="1">
			<i class="icon-thumbs-up"></i>
		</a>
		<span>{{ $comment->likesCount() }}</span>
		<a class="data-remote" data-type="comment" data-type-id="{{$comment->id}}" data-type-value="-1">
			<i class="icon-thumbs-down"></i>
		</a>			
		<span>{{ $comment->dislikesCount() }}</span>						
	</div>
	<div class="comment-content">{{ $comment->content }}</div>
</div>