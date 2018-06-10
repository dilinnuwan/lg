@extends('layouts.setup')

@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="main-panel">
		<div class="content-wrapper">

			<div class="row">
				<div class="col-12 grid-margin">
					<form id="example-form" action="{{ route('setup.update',$user->id) }}" method="POST">
						@csrf
						<div>
							<h3>Profile Setup</h3>
							@include('inc.messages')
							<section>
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Personal Details</h4>
										<div class="form-group">
											<label>Gender</label>
											<select name="gender" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus style="width:100%">
												<option selected>Male</option>
												<option>Female</option>
											</select>
										</div>
										<div class="form-group">
											<label>Nationality</label>
											<select name="nationality" class="form-control {{ $errors->has('nationality') ? ' is-invalid' : '' }}" style="width:100%">
												<option selected>Sinhalese</option>
												<option>Tamils</option>
												<option>Muslims</option>
												<option>Malays</option>
												<option>Burghers/Eurasian</option>
												<option>Others</option>
											</select>
										</div>
					                    <div class="form-group">
					                    	<label>Religion</label>
					                    	<select name="religion" class="form-control {{ $errors->has('religion') ? ' is-invalid' : '' }}" style="width:100%">
					                    		<option selected>Buddhism</option>
					                    		<option>Hinduism</option>
					                    		<option>Islam</option>
						                        <option>Christianity</option>
						                        <option>Other</option>
						                        <option>No Religion</option>
					                    	</select>
					                    </div>
					                    <div class="form-group">
					                    	<label>Marital Status</label>
					                    	<select name="maritalstatus" class="form-control {{ $errors->has('maritalstatus') ? ' is-invalid' : '' }}" style="width:100%">
					                    		<option selected>Single</option>
					                    		<option>Widowed</option>
					                    		<option>Divorced</option>
					                    		<option>Separated</option>
					                    	</select>
					                    </div>
					                    <div class="form-group">
					                    	<label>Height</label>
					                    	<select name="height" class="js-example-basic-single" style="width:100%">
					                    		<option>4ft 5in (134cm)</option>
					                    		<option>4ft 6in (137cm)</option>
					                    		<option>4ft 7in (139cm)</option>
					                    		<option>4ft 8in (142cm)</option>
					                    		<option>4ft 9in (144cm)</option>
					                    		<option>4ft 10in (147cm)</option>
					                    		<option>4ft 11in (149cm)</option>
					                    		<option>5ft (152cm)</option>
					                    		<option>5ft 1in (154cm)</option>
					                    		<option>5ft 2in (157cm)</option>
					                    		<option>5ft 3in (160cm)</option>
					                    		<option>5ft 4in (162cm)</option>
					                    		<option>5ft 5in (165cm)</option>
					                    		<option>5ft 6in (167cm)</option>
					                    		<option selected>5ft 7in (170cm)</option>
					                    		<option>5ft 8in (172cm)</option>
					                    		<option>5ft 9in (175cm)</option>
					                    		<option>5ft 10in (177cm)</option>
					                    		<option>5ft 11in (180cm)</option>
					                    		<option>6ft (182cm)</option>
					                    		<option>6ft 1in (18c5m)</option>
					                    		<option>6ft 2in (187cm)</option>
					                    		<option>6ft 3in (190cm)</option>
					                    		<option>6ft 4in (193cm)</option>
					                    		<option>6ft 5in (195cm)</option>
					                    		<option>6ft 6in (198cm)</option>
					                    		<option>6ft 7in (200cm)</option>
					                    		<option>6ft 8in (203cm)</option>
					                    		<option>6ft 9in (205cm)</option>
					                    		<option>6ft 10in (208cm)</option>
					                    		<option>6ft 11in (210cm)</option>
					                    		<option>7ft (213cm)</option>
					                    	</select>
					                    </div>
					                    <div class="form-group">
					                    	<div class="row">
					                    		<div class="col-sm-12 col-xs-12">
					                    			<label for="dateofbirth" class="col-form-label text-md-right"><h6>Date of birth</h6></label>
					                    		</div>
					                    		<div class="form-group col-sm-4 col-xs-4">
                            						<label for="year" class="col-form-label text-md-right">Year</label>
                            						<select class="form-control {{ $errors->has('bd_year') ? ' is-invalid' : '' }}" id="year" onchange="yearUpdate(this)" name="bd_year" required>
                                						@php
				                                        $last= date('Y')-100;
				                                        $now = date('Y')-18;
				                                        @endphp
				                                        @for ($i = $now; $i >= $last; $i--)
				                                            <option {{old('bd_year',date('Y',$user->dob))==$i? 'selected':''}} value="{{ $i }}">{{ $i }}</option>
				                                        @endfor
                                					</select>
                                				</div>
                                				<div class="form-group col-sm-4 col-xs-4">
                                					<label for="month" class="col-form-label text-md-right">Month</label>
                                					<select class="form-control {{ $errors->has('bd_month') ? ' is-invalid' : '' }}" id="month" onchange="monthUpdate(this)" name="bd_month" required>
                                						<option selected>January</option>
						                                <option>February</option>
						                                <option>March</option>
						                                <option>April</option>
						                                <option>May</option>
						                                <option>June</option>
						                                <option>July</option>
						                                <option>August</option>
						                                <option>September</option>
						                                <option>October</option>
						                                <option>November</option>
						                                <option>December</option>
						                            </select>
						                        </div>
						                        <div class="form-group col-sm-4 col-xs-4">
						                        	<label for="date" class="col-form-label text-md-right">Date</label>
						                        	<select class="form-control {{ $errors->has('bd_date') ? ' is-invalid' : '' }}" id="date" name="bd_date" required>
                                						@for ($i = 1; $i <= 31; $i++)
					                                		<option {{old('bd_date',date('d',$user->dob))==$i? 'selected':''}} value="{{ $i }}">{{ $i }}</option>
					                                	@endfor
                                					</select>
                                				</div>
                                			</div>
                    					</div>
	                				</div>
	            				</div>
	            			</section>
	            			<br>
	            			<section>
	            				<div class="card">
									<div class="card-body">
										<h4 class="card-title">Contact Details</h4>
										{{-- <div class="form-group">
											<label>Mobile Number</label>
											<input id="mobilenumber" type="tel" maxlength="10" pattern="[0][0-9]{9}" class="form-control{{ $errors->has('mobilenumber') ? ' is-invalid' : '' }}" name="mobilenumber" value="{{ old('mobilenumber') }}" placeholder="0771122233">
										</div> --}}
										<div class="form-group">
					                    	<label>Mobile Number</label>
					                    	<input class="form-control{{ $errors->has('mobilenumber') ? ' is-invalid' : '' }}" name="mobilenumber" id="mobilenumber" data-inputmask="'alias': 'phonebe'" value="{{ old('mobilenumber') }}" />
					                	</div>
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('mobilenumber') }}" placeholder="Address" maxlength="100" required autofocus>
										</div>
										<div class="form-group">
											<label for="date" class="col-form-label text-md-right">District</label>
											<select class="js-example-basic-single" style="width:100%" id="date" name="district" required>
					                        	<option>Ampara</option>
					                        	<option>Anuradhapura</option>
					                        	<option>Badulla</option>
					                        	<option>Batticaloa</option>
					                        	<option selected>Colombo</option>
					                        	<option>Galle</option>
					                        	<option>Gampaha</option>
					                        	<option>Hambantota</option>
					                        	<option>Jaffna</option>
					                        	<option>Kalutara</option>
					                        	<option>Kandy</option>
					                        	<option>Kegalle</option>
					                        	<option>Kilinochchi</option>
					                        	<option>Kurunegala</option>
					                        	<option>Mannar</option>
					                        	<option>Matale</option>
					                        	<option>Matara</option>
					                        	<option>Moneragala</option>
					                        	<option>Mullaitivu</option>
					                        	<option>Nuwara Eliya</option>
					                        	<option>Polonnaruwa</option>
					                        	<option>Puttalam</option>
					                        	<option>Ratnapura</option>
					                        	<option>Trincomalee</option>
					                        	<option>Vavuniya</option>
					                        </select>
					                    </div>
					                </div>
					            </div>
					        </section>
					        <br>
					        <section>
					        	<div class="card">
					        		<div class="card-body">
					        			<h4 class="card-title">Employment Details</h4>
					        			<div class="form-group">
					        				<label>Working Sector</label>
					        				<select class="js-example-basic-single" onchange="workingsector_select(this)" name="workingsector" style="width:100%">
					        					<option>Private Sector</option>
                        						<option>Government Sector</option>
                        						<option>Defense / Civil Service</option>
                        						<option>Self Employed</option>
                        						<option>Student</option>
                        						<option>Not Working</option>
                        					</select>
                        				</div>
                        				<div class="form-group" id="workingas">
                        					<label>Working As</label>
                        					<select class="js-example-basic-single" name="workingas" id="workingas_input" onchange="workingas_select(this)" style="width:100%">
                        						<option>Civil Engineer</option>
                        						<option>Clerical Official</option>
                        						<option>Commercial Pilot</option>
                        						<option>Company Secretary</option>
                        						<option>Computer Professional</option>
                        						<option>Consultant</option>
                        						<option>Contractor</option>
                        						<option>Cost Accountant</option>
                        						<option>Creative</option>
                        						<option>Customer</option>
                        						<option>Defense</option>
                        						<option>Dentist</option>
                        						<option>Designer</option>
                        						<option>Doctor</option>
                        						<option>Economist</option>
                        						<option>Engineer</option>
                        						<option>Entertainment Professional</option>
                        						<option>Event Manager</option>
                        						<option>Executive</option>
                        						<option>Factory</option>
                        						<option>Farmer</option>
                        						<option>Fashion Designer</option>
                        						<option>Finance Professional</option>
                        						<option>Flight Attendant</option>
                        						<option>Government Employee</option>
                        						<option>Health Care Professional</option>
                        						<option>Home Maker</option>
                        						<option>Hotel and Restaurant Professional</option>
                        						<option>Human Resources Professional</option>
                        						<option>Interior Designer</option>
                        						<option>Investment Professional</option>
                        						<option>IT / Telecoms</option>
                        						<option>Journalist</option>
                        						<option>Lawyer</option>
                        						<option>Lecturer</option>
                        						<option>Legal Professional</option>
                        						<option>Manager</option>
                        						<option>Marketing Professional</option>
                        						<option>Media Professional</option>
                        						<option>Medical Professional</option>
                        						<option>Medical Transcriptionist</option>
                        						<option>Merchant Naval Officer</option>
                        						<option>Military</option>
                        						<option>Nurse</option>
                        						<option>Occupational</option>
                        						<option>Optician</option>
                        						<option>Pharmacist</option>
                        						<option>Physician Assistant</option>
                        						<option>Physicist</option>
                        						<option>Physiotherapist</option>
                        						<option>Pilot</option>
                        						<option>Politician</option>
                        						<option>Production professional</option>
                        						<option>Professor</option>
                        						<option>Psychologist</option>
                        						<option>Public Relations Professional</option>
                        						<option>Real Estate Professional</option>
                        						<option>Research Scholar</option>
                        						<option>Retail Professional</option>
                        						<option>Retired Person</option>
                        						<option>Sales Professional</option>
                        						<option>Scientist</option>
                        						<option>Social Worker</option>
                        						<option>Software Consultant</option>
                        						<option>Sportsman</option>
                        						<option>Teacher</option>
                        						<option>Technician</option>
                        						<option>Training Professional</option>
                        						<option>Transportation Professional</option>
                        						<option>Veterinary Doctor</option>
                        						<option>Volunteer</option>
                        						<option>Writer</option>
                        						<option>Zoologist</option>
                        						<option>Not listed here</option>
                        					</select>
                        				</div>
                        				<div class="form-group" id="profession" style="display: none">
											<label>Your Profession</label>
											<input type="text" class="form-control {{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession" value="{{ old('profession') }}" placeholder="Soldier" maxlength="50" id="profession_input" autofocus>
										</div>
                        				<div class="form-group" id="income">
                        					<label>Income</label>
                        					<select class="js-example-basic-single" name="income" id="income_input" style="width:100%">
                        						<option>Less than LKR 25000</option>
                       							<option>LKR 25000 - 50000</option>
                       							<option>LKR 50000 - 75000</option>
                       							<option>LKR 75000 - 100000</option>
                       							<option>LKR 100000 - 150000</option>
                       							<option>LKR 150000 - 200000</option>
                       							<option>LKR 250000 - 300000</option>
                       							<option>Above LKR 300000</option>
                       						</select>
                       					</div>
                       					<input type="hidden" name="_method" value="PUT" />
                       					<div class="form-group row">
                       						<div class="col-md-4 col-md-offset-4">
                       							<button type="submit" class="btn btn-primary">
                       								{{ __('Save') }}
                       							</button>
                       						</div>
                       					</div>
                       				</div>
                       			</div>
                       		</section>
                       	</div>
                       </form>
                   </div>
               </div>
           </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('inc.footer');
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
@endsection

@section('js_script')
{{-- <script src="{{ asset('theme_src/js/wizard.js') }}"></script> --}}
<script src="{{ asset('theme_src/js/select2.js') }}"></script>
<script src="{{ asset('theme_src/js/moment.js') }}"></script>
<script type="text/javascript">

	//dop time formating

    var year = moment().format('YYYY');
    var month = 'January';
    var ym_string = year+'-'+month;
    var daysinmonth = moment(String(ym_string), "YYYY-MMMM").daysInMonth();


    function yearUpdate(yearObject) {
        year = yearObject.value;
        makeDayList();
    }

    function monthUpdate(monthObject) {
        month = monthObject.value;
        makeDayList();
    }

    function makeDayList(){
        ym_string = year+'-'+month;
        daysinmonth = moment(String(ym_string), "YYYY-MMMM").daysInMonth();
        $('#date').html('');
        for (var i = 1; i <= daysinmonth; i++) {
            $('#date').append($('<option>', {
                value: i,
                text: i
            }));
        }
        
    }


    //working sector
    function workingsector_select(workingsectorObj){
    	var working_sector = workingsectorObj.value;

    	if(working_sector=="Not Working" || working_sector=="Student"){
    		$('#workingas').hide();
    		$('#income').hide();

    		$('#workingas_input').val(null).change();
    		$('#income_input').val(null).change();
    		$('#profession_input').val(null).change();
    	}
    	else{
    		$('#workingas_input').val('Civil Engineer').change();
    		$('#income_input').val('Less than LKR 25000').change();

    		$('#workingas').show();
    		$('#income').show();
    	}
    	
    }

    //working as not listed
    function workingas_select(workingasObj) {
    	var working_as = workingasObj.value;

    	if(working_as=="Not listed here"){
    		$('#profession').show();
    		$('#profession_input').attr('required', '');
    	}
    	else{
    		$('#profession').hide();
    		$('#profession_input').removeAttr('required');
    	}
    }

</script>
@endsection