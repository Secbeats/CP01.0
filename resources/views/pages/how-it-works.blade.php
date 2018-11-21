@extends('layouts.app')
@section('content')
<div>

    <i class="icon fa fa-flask inner-icon" aria-hidden="true"></i>
    <div id="tab2" class="tab-grid">
        <div class="login-form">
            <form action="pay.html" method="post" id="signup">
                <ol>
                    <li>
                        <h4>Your Name</h4>
                        <input type="text" id="customer" name="name" placeholder="Enter Your Name" required="required" />
                    </li>
                    <li>
                        <h4>Your Email</h4>
                        <input type="text" id="customer"  name="email" placeholder="youremail@domain.com" readonly>
                    </li>
                    <li>
                        <input type="submit" class="submit" value="Update" />
                    </li>
                </ol>
            </form>
        </div>
    </div>
</div>
    @endsection