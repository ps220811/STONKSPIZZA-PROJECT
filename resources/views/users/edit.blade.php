<div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('users', $orders->id ) }}" method="head">
                @csrf
                {{ method_field('head') }}
                <label>Name</label></br>
                <input type="text" name="id" id="id" value="{{$orders->name}}" id="id"/>
                
                <input type="text" name="name" id="name" value="{{$orders->status}}" class="form-control"></br>
                

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>