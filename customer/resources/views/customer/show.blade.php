<h1> Customer Details </h1>

<strong>ID: </strong> {{ $customer->id}} <br>

<strong>Name: </strong> {{$customer->name}} <br>

<strong>Email: </strong> {{$customer->email}} <br> <br>

<button><a href="{{route('customer.index')}}" > Back  </a> </button>
<button><a href="{{route('customer.edit', $customer->id)}}" > Edit  </a> </button>
<form action="{{route('customer.destroy', $customer->id)}}" method="post"> @csrf @method('DELETE') <button> Delete  </button> </form>
