<div class="registerPage"></div>
<div class="register">
    <h1>weiwait</h1>
    <form action="{{ url('auth/register') }}" method="post">
        {!! csrf_field() !!}
        <input type="text" title="" name="name" placeholder="your username" value="{{ old('name') }}">
        <input type="password" title="" name="password" placeholder="your password">
        <input type="password" title="" name="password_confirmation" placeholder="again password">
        <input type="email" title="" name="email" placeholder="your email" value="{{ old('email') }}">
        <input type="submit" value="submit" title="">
    </form>
</div>