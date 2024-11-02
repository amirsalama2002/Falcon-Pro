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
        /* justify-content: space-between; */
        padding: 10px 5px;
        width: 100%;
    }
    .home{
        margin-right: 20px;
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
        background-color: #123456;
        color: white;
        text-align: center;
        text-transform: capitalize;
        border: 1px solid white;
    }

    table tr td {
        text-align: center;
    }

    .mero {
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="nm">
    <img src="https://befalcon.com/wp-content/uploads/2022/09/Befalcon-Logo150-01-1-e1664366787428.png" alt="falcon">
    Contracts End Dates Report :
</div>
<form action="{{route('ContractsEndDatesReport.index')}}" method="post">
    @csrf
    @method('post')
    <div class="contacts">
        <div class="home">
            <div>
                <label>Date Form: </label>
                <input type="date" name="dateform" placeholder="Building Name" required>
            </div>
            <div>
                <!-- <label>Arabic Name : </label> -->
                <input type="text" name="contracttype" placeholder="Contract Type" required>
            </div>
        </div>
        <div class="footer">
            <div>
            <label>To : </label>
                <input type="date" name="todateform" placeholder="Category" required>
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
                <th scope="col">Date Form</th>
                <th scope="col">To</th>
                <th scope="col">Contract Type</th>      
                <th scope="col">Edit</th>      
            </tr>
        </thead>
        <tbody>
           @foreach ($he as $nm )
           <tr>
            <td>{{$nm->id}}</td>
            <td>{{$nm->dateform}}</td>
            <td>{{$nm->todateform}}</td>
            <td>{{$nm->contracttype}}</td>
            <td>
                <form action="{{route('ContractsEndDatesReport.destroy',$nm->id)}}" method="post">
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