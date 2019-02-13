<form action="{{ $url  }}" method="POST">
    @method('delete')
     @csrf
    <button type='submit' class="btn btn-danger btn-sm text-white" onclick="return confirm('{{$message}}')" >Delete</button>
</form>