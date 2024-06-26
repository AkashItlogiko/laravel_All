<h1>This is My Contact Page</h1>
<a href="{{ url('/') }}">Back to Home</a>

<h1>Store your Phone</h1>
<br>

<form action="{{route('student.store')}}" method="post">
  @csrf
<input type="text" name="name" placeholder="write your name"><br><br>
<input type="text" name="email" placeholder="write your email"><br><br>
<input type="text" name="phone" placeholder="write your phone number"><br><br>
<button type="submit">Submit</button>
</form>