<h1>This is My About Page</h1>
<a href="{{ url('/') }}">Back to Home</a>

<form action="{{route('student.store')}}" method="post">
  @csrf
<input type="text" name="name" placeholder="write your name"><br>
<input type="text" name="email" placeholder="write your email"><br>
<button type="submit">submit</button>
</form>