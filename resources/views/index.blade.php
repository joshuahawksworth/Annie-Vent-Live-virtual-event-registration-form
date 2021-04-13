<style>
body{
    padding-top: 20px;
}
#annie-vent-form{
    border-radius: 13px;
    box-shadow: 0 0 15px #999999;
    padding: 20px;
}

#annie-vent-form span{
    font-weight: bold;
}
.button-container button{
    width: 200px;
    height: 70px;
    background-color: dodgerblue;
    border-color: dodgerblue;
}
.button-container{
    text-align: center;
}
</style>
<html>
    <head>
        <title> Annie Vent Live </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    </head>
    <body>
        <div class="container">
            <div class="form-group cold-12 p-0">
            
                <?php if(Session::has('success')){ ?>
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                <?php } ?>

                <form id="annie-vent-form" action="{{ route('send.email') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <div class="col-sm-12">
                            <h2 class="title">Annie Vent Live virtual event registration form</h2>
                        </div>
                    </div>

                    <hr/>

                    <div class="row inputs">
                        <div class="form-group col-md-6">
                            <span>Name</span>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <span>Email</span>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <span>Phone</span>
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <span>Address</span>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Address">
                        </div>

                        <div class="form-group col-md-6">
                            <span>Dietary requirments?</span><br>
                            <input type="radio" id="diet1" name="diet" value="none">
                            <label for="diet1">None</label><br>
                            <input type="radio" id="diet2" name="diet" value="vegetarian">
                            <label for="diet2">Vegetarian</label><br>  
                            <input type="radio" id="diet3" name="diet" value="vegan">
                            <label for="diet3">Vegan</label>
                        </div>

                        <div class="form-group col-md-6">
                            <span>Estimated arrival time</span>
                            <input type="time" id="eta" name="eta" class="form-control" placeholder="Estimated arrival time">
                        </div>

                        <div class="form-group col-md-12 button-container">
                            <button class="btn btn-success" style="">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>