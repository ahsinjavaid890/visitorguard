@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')


<link rel="stylesheet" href="{{ asset('public/front/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/flaticon.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css">
<link rel="stylesheet" href="{{ asset('public/front/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/time.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}">





<style>
	.dropdown-item {
        color: white!important;
    }
    .headlogo .navbar-dark a{
        color:black;
    }
    .headlogo{
        top: -4px;
    }
	
</style>





@include('frontend.companypages.includes.main')






<div style="background-color:#f4f7fa" class="container-homepage">
	<div class="quotationscards">
                      
	</div>
</div>
@include('frontend.companypages.includes.sectiontwo')
@include('frontend.companypages.includes.sectionthree')
@include('frontend.companypages.includes.sectionfour')
@include('frontend.companypages.includes.faqsection')
@include('frontend.companypages.includes.productsection')
@endsection


@section('script')
<link href="{{ url('public/front/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ url('public/front/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/front/js/jquery.mask.min.js') }}"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#dateofbirthfull').mask('00/00/0000');
       $('.dateofbirthfull2').mask('00/00/0000');
       $('.dateofbirthfull3').mask('00/00/0000');
       $('.dateofbirthfull4').mask('00/00/0000');
       $('.dateofbirthfull5').mask('00/00/0000');
       $('.dateofbirthfull6').mask('00/00/0000');
   });
</script>
<script>
$(".sum_insured2").select2({
    minimumResultsForSearch: -1,
    placeholder: "Select Coverage Amount",
    allowClear: false
});
$(".primarydestination").select2({
    minimumResultsForSearch: -1,
    placeholder: "Select Primary Destination",
    allowClear: false
});


$(".pre_existing_condition1").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition2").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition3").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition4").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition5").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition6").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});


</script>
@endsection