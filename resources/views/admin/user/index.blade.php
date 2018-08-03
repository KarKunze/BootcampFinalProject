<ul>
@forelse ($users as $user)

    <li>{{ $user->name  }} ({{ $user->email }})</li>

@empty

    <li>No registered users</li>

@endforelse
</ul>
