<h1>Customers</h1>

<a href="/customers/create"> Add a new Customer</a> <br> <br> <br> 

@forelse($customers as $customer)

    <a href="{{route('customer.show', $customer->id)}}"> 
    <li> <strong> {{$customer->name}} </strong> </a>({{$customer->email}})</li>
    
@empty 
    <P>No customer Found</p>
@endforelse