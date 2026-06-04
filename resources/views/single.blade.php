<h1>Single User</h1>
@foreach ($data as $id => $user)
    <h3>Name: {{ $user->name }}</h3>
    <h3>Name: {{ $user->email }}</h3>
    <h3>Name: {{ $user->city }}</h3>
@endforeach
