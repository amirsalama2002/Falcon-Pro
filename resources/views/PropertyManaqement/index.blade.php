@extends('Navbar.layout')

@section('name')
@section('name')
<style>
    .nm {
        padding: 10px 10px;
        width: 100%;
        background-color: saddlebrown;
        color: white;
    }

    .nm img {
        width: 30px;
        height: 30px;
    }

    .contacts {
        display: flex;
        justify-content: space-between;
        padding: 10px 5px;
        width: 100%;
    }

    label {
        font-size: 15px;
    }

    input {
        width: 100%;
        border: 2px solid black;
        margin-right: 20px;
        margin-bottom: 10px;
        padding: 7px 5px;
    }



    .icon input {
        width: 20px;
    }

    .icon label {
        text-align: center;
    }



    ::placeholder {
        text-align: center;
    }


    form button {
        background-color: saddlebrown;
        padding: 5px;
        border: 1px solid saddlebrown;
        border-radius: 5px;
        color: white;
        width: 100%;
        margin: auto;
        margin-top: -40px;
        margin-bottom: 3px;
    }

    table tr .a {
        font-size: 15px;
        text-align: center;
        background-color: blue;
        color: white;
        border: 1px solid white;
    }

    table tr th {
        font-size: 10px;
        font-weight: bold;
        background-color: #123456;
        color: white;
        text-align: center;
        text-transform: capitalize;
    }

    table tr td {
        text-align: center;
        font-size: 10px;
        font-weight: bold;
    }
    .mero{
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="nm">
    <img src="https://befalcon.com/wp-content/uploads/2022/09/Befalcon-Logo150-01-1-e1664366787428.png" alt="falcon">
    Property Manaqement :
</div>
<form action="{{route('PropertyManaqement.index')}}" method="post">
    @csrf
    @method('post')
    <div class="contacts">
        <div class="home">
            <div>
                <!-- <label>Name : </label> -->
                <input type="text" name="buildingname" placeholder="Building Name" required>
            </div>
            <div>
                <!-- <label>Arabic Name : </label> -->
                <input type="text" name="property" placeholder="Property" required>
            </div>
            <div>
                <!-- <label>Email : </label> -->
                <input type="text" name="type" placeholder="Type" required>
            </div>

            <div>
                <!-- <label>Model : </label> -->
                <input type="text" name="model" placeholder="Model" required>
            </div>
        </div>
        <div class="footer">
            <div>
                <input type="text" name="category" placeholder="Category" required>
            </div>
            <div class="mero">
                <input type="text" name="priceform" placeholder="Price Form " required>
                <input type="text" name="topriceform" placeholder="To" required>
            </div>
            <div class="mero">
                <input type="text" name="size" placeholder="size " required>
                <input type="text" name="tosize" placeholder="To" required>
            </div>
            <div>
                <input type="text" name="status" placeholder="Status" required>
            </div>


        </div>
        <div class="nood">
            <div>
                <!-- <label>View : </label> -->
                <input type="text" name="view" placeholder="View" required>
            </div>
            <div>
                <input id="remarks" type="text" name="feature" placeholder="Feature" required>
            </div>
        </div>
    </div>
    <div class="btn">
    </div>
    <button type="submit"> Save Date</button>
</form>

<div class="contactsbutton">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Building Name</th>
                <th scope="col">Property</th>
                <th scope="col">Type</th>
                <th scope="col">Model</th>
                <th scope="col">Category</th>
                <th scope="col">Price Form</th>
                <th scope="col">To</th>
                <th scope="col">Size</th>
                <th scope="col">To</th>
                <th scope="col">Status</th>
                <th scope="col">View</th>
                <th scope="col">Feature</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($mo as $nm )
            <tr>
                <td>{{$nm->id}}</td>
                <td>{{$nm->buildingname}}</td>
                <td>{{$nm->property}}</td>
                <td>{{$nm->type}}</td>
                <td>{{$nm->model}}</td>
                <td>{{$nm->category}}</td>
                <td>{{$nm->priceform}}</td>
                <td>{{$nm->topriceform}}</td>
                <td>{{$nm->size}}</td>
                <td>{{$nm->tosize}}</td>
                <td>{{$nm->status}}</td>
                <td>{{$nm->view}}</td>
                <td>{{$nm->feature}}</td>
                <td>
                    <form action="{{route('PropertyManaqement.destroy',$nm->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
@endsection