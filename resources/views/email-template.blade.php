<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Thank you for regstering your details for the live event with Annie Vent Live!</div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    <br>
                    Name: {!! $name !!} <br>
                    Address: {!! $address !!} <br>
                    E-mail: {!! $email !!} <br>
                    Diet: {!! $diet !!} <br>
                    ETA: {!! $eta !!} <br>
                    Phone Number: {!! $phone !!} <br>
                </div>
            </div>
        </div>
    </div>
</div>