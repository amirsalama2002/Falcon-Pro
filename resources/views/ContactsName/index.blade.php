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

    .mero {
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="nm">
    <img src="https://befalcon.com/wp-content/uploads/2022/09/Befalcon-Logo150-01-1-e1664366787428.png" alt="falcon">
    Contracts Name :
</div>
<form action="{{route('ContactsName.index')}}" method="post">
    @csrf
    @method('post')
    <div class="contacts">
        <div class="home">
            <div>
                <!-- <label>Name : </label> -->
                <input type="text" name="contractno" placeholder="Contract No" required>
            </div>
            <div>
                <!-- <label>Arabic Name : </label> -->
                <input type="text" name="tenantbuyer" placeholder="Tenant Buyer" required>
            </div>
            <div>
                <!-- <label>Email : </label> -->
                <input type="text" name="salesperson" placeholder="Sales Berson" required>
            </div>

            <div>
                <!-- <label>Model : </label> -->
                <input type="text" name="contracttype" placeholder="Contract Type" required>
            </div>
        </div>
        <div class="footer">
            <div>
                <input type="text" name="contractstatus" placeholder="Contract Status" required>
            </div>
            <div class="mero">
                <label for="">Start</label>
                <input type="date" name="startdatefrom" placeholder="Start Date From " required>
                <label for="">To</label>
                <input type="date" name="tostartdatefrom" placeholder="To " required>
            </div>
            <div class="mero">
                <label for="">End</label>
                <input type="date" name="enddatefrom" placeholder="End Date From" required>
                <label for="">To</label>
                <input type="date" name="toenddatefrom" placeholder="To" required>

            </div>
            <div>
                <input type="text" name="property" placeholder="Property" required>
            </div>


        </div>
        <div class="nood">
            <div>
                <!-- <label>View : </label> -->
                <input type="text" name="buildingname" placeholder="Building Name" required>
            </div>
            <div>
                <input id="remarks" type="text" name="agentbroker" placeholder="Agent Broker" required>
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
                <th scope="col">Contract No</th>
                <th scope="col">Tenant Buyer</th>
                <th scope="col">Sales Berson</th>
                <th scope="col">Contract Type</th>
                <th scope="col">Contract Status</th>
                <th scope="col">Start Date From</th>
                <th scope="col">To</th>
                <th scope="col">End Date From</th>
                <th scope="col">To</th>
                <th scope="col">Property</th>
                <th scope="col">Building Name</th>
                <th scope="col">Agent Broker</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mo as $nm )
            <tr>
                <td>{{$nm->id}}</td>
                <td>{{$nm->contractno}}</td>
                <td>{{$nm->tenantbuyer}}</td>
                <td>{{$nm->salesperson}}</td>
                <td>{{$nm->contracttype}}</td>
                <td>{{$nm->contractstatus}}</td>
                <td>{{$nm->startdatefrom}}</td>
                <td>{{$nm->tostartdatefrom}}</td>
                <td>{{$nm->enddatefrom}}</td>
                <td>{{$nm->toenddatefrom}}</td>
                <td>{{$nm->property}}</td>
                <td>{{$nm->buildingname}}</td>
                <td>{{$nm->agentbroker}}</td>
                <td>
                    <form action="{{route('ContactsName.destroy',$nm->id)}}" method="post">
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