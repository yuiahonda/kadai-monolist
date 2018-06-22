@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
    <li><a href="{{ route('signup.get') }}">新規登録</a></li>
@endif
