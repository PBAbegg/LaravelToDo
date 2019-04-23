{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}

<form action="/foo/bar" method="POST">
    @method('PUT')

    ToDo Post

</form>

{!! Form::close() !!}