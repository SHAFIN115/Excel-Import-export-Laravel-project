<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
     @csrf
    <input type="file" name="file">
    <br><br>
    <button>IMPORT USER DATA</button>
</form>
<br><br>
<a href="{{ route('export') }}">EXPORT USER DATA</a>
