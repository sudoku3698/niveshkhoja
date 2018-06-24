<!-- Navigation -->

    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <img src="{{ asset('public/images/profile.jpg')}}" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Bank Khoja</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Admin<b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="analytics.html">Analytics</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ Route('logout')}}">Logout</a></li>
                    </ul>
                </div>


                
                
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li>
                <a href="dashboard"> <span class="nav-label">Dashboard</span> <span class="label label-success pull-right">v.1</span> </a>
            </li>
            <li>
                <a href="advertisement"> <span class="nav-label">Ads</span></a>
            </li>
            <li>
                <a href="listings"> <span class="nav-label">Listings</span></a>
            </li>
            <li>
                <a href="reviews"> <span class="nav-label">Reviews</span></a>
            </li>
            <li>
                <a href="{{ route('get_categories') }}"> <span class="nav-label">Categories</span></a>
            </li>
            <li>
                 <a href="#"><span class="nav-label">Add Records</span><span class="fa fa-rupee pull-right" ></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ Route('bank') }}">Bank Details</a></li>
                   <li><a href="{{Route('broker-add')}}">Broker & Sub-Broker Details</a></li>
                    <li><a href="{{Route('cfacategory')}}">CFA Details</a></li>
                    <li><a href="{{Route('insurance')}}">Insurance Details</a></li>
                    <li><a href="{{Route('loan')}}">Loan Details</a></li>
                    <li><a href="{{Route('mutual_fund_distributors')}}">Mutual Fund Distributor Details</a></li>
                    <li><a href="{{Route('postofficepage')}}">Post Office Details</a></li>
                    <li><a href="{{Route('investment_advisors')}}">Investment Advisors Details</a></li>
                    <li><a href="{{Route('research_analyst')}}">Research Analyst Details</a></li>
                    
                </ul>
                 
            </li>


            <li class="">
                <a href="#"><span class="nav-label">View Records</span><span class="fa fa-download pull-right" ></span> </a>
                <ul class="nav nav-second-level">
                   <li><a href="{{Route('getbankdetails')}}">Bank Details</a></li>
                <li><a href="{{Route('getbrokersubbroker')}}">Broker & Sub-Broker Details</a></li>
                <li><a href="{{Route('getcfacategory')}}">CFA Details</a></li>
                <li><a href="{{Route('getInsurance')}}">Insurance Details</a></li>
                <li><a href="{{Route('getloan')}}">Loan Details</a></li>
                <li><a href="{{Route('getmutual_fund')}}">Mutual Fund Distributor Details</a></li>
                <li><a href="{{Route('getpostoffice')}}">Post Office Details</a></li>
                <li><a href="{{Route('getinvestment_advisors')}}">Investment Advisors Details</a></li>
                <li><a href="{{Route('getresearch_analyst')}}">Research  Analyst Details</a></li>
                    
                </ul>
            </li>
            
            <li class="">
                <a href="#"><span class="nav-label">Requests</span><span class="fa fa-download pull-right" ></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('get_quotes')}}">Quotes</a></li>
                    <li><a href="{{route('get_sms')}}">Request SMS</a></li>
                </ul>
            </li>
            

        </ul>
    </div>
