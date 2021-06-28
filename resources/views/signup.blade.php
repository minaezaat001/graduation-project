<form method="POST" action="{{ route('auth.signup.post') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" class="form-control" placeholder="password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">photo</label>
        <input name="kind" class="form-control" placeholder="kind">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
