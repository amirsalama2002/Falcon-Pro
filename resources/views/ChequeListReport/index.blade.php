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
    Cheque List Report :
</div>
<form action="{{route('ChequeListReport.index')}}" method="post">
    @csrf
    @method('post')
    <div class="contacts">
        <div class="home">
            <div>
                <!-- <label>Name : </label> -->
                <input type="text" name="printid" placeholder="Printid" required>
            </div>
            <div>
                <!-- <label>Arabic Name : </label> -->
                <input type="text" name="chequeno" placeholder="Chequeno" required>
            </div>
            <div>
                <!-- <label>Email : </label> -->
                <input type="text" name="amount" placeholder="Amount" required>
            </div>

            <div>
                <!-- <label>Model : </label> -->
                <input type="text" name="desing" placeholder="Desing" required>
            </div>
        </div>
        <div class="footer">
            <div>
                <input type="text" name="payto" placeholder="Payto" required>
            </div>
            <div class="mero">
                <label for="">Cheque</label>
                <input type="date" name="chequedate"  required>
                <label for="">To</label>
                <input type="date" name="tochequedate"  required>
            </div>
            <div class="mero">
                <label for="">iSSUE</label>
                <input type="date" name="issuedate"  required>
                <label for="">To</label>
                <input type="date" name="toissuedata"  required>
            </div>
            <div class="mero">
                <label for="">Print</label>
                <input type="date" name="printdateform"  required>
                <label for="">To</label>
                <input type="date" name="toprintdateform"  required>
            </div>
            


        </div>
        <div class="nood">
        <div>
                <input type="text" name="printstatus" placeholder="Print Status" required>
            </div>
            <div>
                <!-- <label>View : </label> -->
                <input type="text" name="companty" placeholder="Companty" required>
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
                <th scope="col">Printid</th>
                <th scope="col">Chequeno</th>
                <th scope="col">Amount</th>
                <th scope="col">Desing</th>
                <th scope="col">Payto</th>
                <th scope="col">Cheque Data</th>
                <th scope="col">To</th>
                <th scope="col">issue Data</th>
                <th scope="col">To</th>
                <th scope="col">Print Date Form</th>
                <th scope="col">TO</th>
                <th scope="col">Print Status</th>
                <th scope="col">Companty</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($moo as $nm )
          <tr>
            <td>{{$nm->id}}</td>
            <td>{{$nm->printid}}</td>
            <td>{{$nm->chequeno}}</td>
            <td>{{$nm->amount}}</td>
            <td>{{$nm->desing}}</td>
            <td>{{$nm->payto}}</td>
            <td>{{$nm->chequedate}}</td>
            <td>{{$nm->tochequedate}}</td>
            <td>{{$nm->issuedate}}</td>
            <td>{{$nm->toissuedate}}</td>
            <td>{{$nm->printdateform}}</td>
            <td>{{$nm->toprintdateform}}</td>
            <td>{{$nm->printstatus}}</td>
            <td>{{$nm->companty}}</td>
            <td>
                <form action="{{route('ChequeListReport.destroy',$nm->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button>Delete</button>
                </form>
            </td>
          </tr>
        @endforeach  
      
        </tbody>
    </table>
</div>
@endsection