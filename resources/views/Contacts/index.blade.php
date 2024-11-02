@extends('Navbar.layout')

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

    /* form {
        border: 2px solid black;

    } */

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
</style>
<div class="nm">
    <img src="https://befalcon.com/wp-content/uploads/2022/09/Befalcon-Logo150-01-1-e1664366787428.png" alt="falcon">
    Contacts :
</div>

<form action="{{route('contacts.index')}}" method="post">
    @csrf
    @method('post')
    <div class="contacts">
        <div class="home">
            <div>
                <!-- <label>Name : </label> -->
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div>
                <!-- <label>Arabic Name : </label> -->
                <input type="text" name="arabicname" placeholder="Arabic Name" required>
            </div>
            <div>
                <!-- <label>Email : </label> -->
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div>
                <!-- <label>Model : </label> -->
                <input type="text" name="model" placeholder="Model" required>
            </div>
            <div class="icon">
                <div class="icon1">
                    <label>All :</label>
                    <input type="radio" name="" id="" placeholder="All">
                    <label>Individuai :</label>
                    <input type="radio" name="" id="">
                    <label>Company :</label>
                    <input type="radio" name="" id="">
                </div>

                <div class="icon3">
                    <label>lable :</label>
                    <input type="checkbox" name="" id="">
                    <label>Owner :</label>
                    <input type="checkbox" name="" id="">
                    <label>Employee :</label>
                    <input type="checkbox" name="" id="">
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <input type="text" name="box" placeholder="P.O.Box : " required>
            </div>
            <div>
                <input type="text" name="officephone" placeholder="Office Phone : " required>
            </div>
            <div>
                <input type="text" name="mobile" placeholder="Mobile : " required>
            </div>
            <div>
                <input type="text" name="country" placeholder="Country : " required>
            </div>


        </div>
        <div class="nood">
            <div>
                <!-- <label>View : </label> -->
                <input type="text" name="view" placeholder="View" required>
            </div>
            <div>
                <input id="remarks" type="text" name="remarks" placeholder="Remarks : " required>
            </div>
            <div>
                <input type="text" name="category" placeholder="Category : " required>
            </div>
            <div>
                <input type="text" name="feature" placeholder="Feature : " required>
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
                <th scope="col">Name</th>
                <th scope="col">ArabicName</th>
                <th scope="col">Email</th>
                <th scope="col">Model</th>
                <th scope="col">View</th>
                <th scope="col">Box</th>
                <th scope="col">OfficePhone</th>
                <th scope="col">Mobile</th>
                <th scope="col">Counytr</th>
                <th scope="col">Feature</th>
                <th scope="col">Category</th>
                <th scope="col">Remarks</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($name as $nm )

            <tr>

                <td>{{$nm->id}}</td>
                <td>{{$nm->name}}</td>
                <td>{{$nm->arabicname}}</td>
                <td>{{$nm->email}}</td>
                <td>{{$nm->model}}</td>
                <td>{{$nm->view}}</td>
                <td>{{$nm->box}}</td>
                <td>{{$nm->officephone}}</td>
                <td>{{$nm->mobile}}</td>
                <td>{{$nm->country}}</td>
                <td>{{$nm->feature}}</td>
                <td>{{$nm->category}}</td>
                <td>{{$nm->remarks}}</td>
                <td>
                    <form action="{{route('contacts.destroy',$nm->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection