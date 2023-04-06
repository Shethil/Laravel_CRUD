<h1>Edit customer </h1>

<form action="{{route('customer.update',$customer->id)}}" method="POST">

    @method('PUT')
    @csrf

    <div>
        <label >Name</label>
        <input type="text" name="name" autocomplete="off" value="{{$customer->name}}">
        @error('name') <p style="color:red">{{ $message }}</p> @enderror
    </div>
    
    <br>

    <div>
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" value="{{$customer->email}}">
        @error('email') <p style="color:red">{{ $message }}</p> @enderror
    </div>

    <br>

    <div>
        <button type="submit">Save</button>
    </div>

</form>