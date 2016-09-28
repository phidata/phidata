@if (isset($errors)&&count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>发生了一些问题！</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
