<li class="list-group-user-item clearfix{{ $notification->read_at == null ? ' not_read' : '' }}">
	<div class="avatar">
		<img src="{{ $user->getAvatar(40) }}" alt="User Avatar">
	</div>
	<div class="content">
		<div class="title">
			<a href="{{ route('profile', ['player' => $user->username]) }}"><strong>{{ $user->getDisplayName() }}</strong></a>
			profilinde bir <a href="{{ route('status', ['id' => $notification->data['status_id']]) }}">paylaşım</a> yaptı.
		</div>
		<div class="body text-muted">
			{{ $notification->created_at->diffForHumans() }}
		</div>
	</div>
</li>