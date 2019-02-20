@extends('immigration.layout')


@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Resources				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Resources</a></p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
    

    <section class="calltotop-area pt-70 pb-70">
            <div class="container">
                <div class="callto-section">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 call-left no-padding">
                            <p>
                                የማዕከሉ ምስረታ ዋና <span>የመግባቢያ ሰነድ</span>
                            </p>
                        </div>
                        <div class="col-lg-5 call-middle">
                            <p>
                                ይህ ሰነድ ስለማእከሉ አጠቃላይ ታሪክ፣ እቅድና ተግባር ያብራራል።
                            </p>
                        </div>
                        <div class="col-lg-3 call-right justify-content-end d-flex">
                            <a href="{{route('theme.download',['name'=>'alen1.pdf'])}}" class="call-btn">ይመዝገቡ</a>
                        </div>
                    </div>
                </div>
            </div>	
        </section>

{{-- <div class="section-top-border">
                <h3 class="mb-30">Form Element</h3>
                <form action="#">
                    <div class="mt-10">
                        <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select"">
                            <select>
                                <option value="1">City</option>
                                <option value="1">Dhaka</option>
                                <option value="1">Dilli</option>
                                <option value="1">Newyork</option>
                                <option value="1">Islamabad</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select"">
                            <select>
                                <option value="1">Country</option>
                                <option value="1">Bangladesh</option>
                                <option value="1">India</option>
                                <option value="1">England</option>
                                <option value="1">Srilanka</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                    </div>
                    <!-- For Gradient Border Use -->
                    <!-- <div class="mt-10">
                        <div class="primary-input">
                            <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                            <label for="primary-input"></label>
                        </div>
                    </div> -->
                    <div class="mt-10">
                        <input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
                    </div>
                </form>
</div>   --}}


@endsection