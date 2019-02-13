
<div class="container" >
    <ul class="list-group list-group-flush list-group-item-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>