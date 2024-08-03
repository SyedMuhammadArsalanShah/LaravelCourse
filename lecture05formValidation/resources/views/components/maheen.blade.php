

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" value="{{old("username")}}" id="exampleInputEmail1"
        aria-describedby="emailHelp">

    @error($name)
        {{ $message }}
    @enderror


</div>
