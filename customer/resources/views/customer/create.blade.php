<h1>Add a new customer </h1>

<form action="{{route('customer.store')}}" method="post">

    @csrf

    <div>
        <label >Name</label>
        <input type="text" name="name" autocomplete="off" value="{{old('name')}}">
        @error('name') <p style="color:red">{{ $message }}</p> @enderror
    </div>
    
    <br>

    <div>
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" value="{{old('email')}}">
        @error('email') <p style="color:red">{{ $message }}</p> @enderror
    </div>

    <br>

    <div>
        <button>Add</button>
    </div>

</form>