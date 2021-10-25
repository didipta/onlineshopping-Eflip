<div class="header">
        <div class="call-mail">
            <p><i class="fa fa-phone" aria-hidden="true"></i> 01919170323</p>
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> diptacompani12@gmail.com</p>
        </div>
        <div class="logout-name">
            <p><a href="{{route('/profile')}}">@<span>{{$Systemuser->U_username}}</span></a></p>
           <a href="{{route('/logout')}}"> <p>Logout</p></a>
            <p><i class="fa fa-bell-o" aria-hidden="true"></i><sup class="notification">12</sup>
            </p>
        </div>
        
    </div>