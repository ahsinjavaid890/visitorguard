@extends('frontend.layouts.main')
@section('firstnav')
<div class="col-md-12 py-5 d-lg-block d-none">
    <h1 class="head">FAQ<span>What Makes Life Advice Extra Smart?</span></h1>
</div>
@endsection
@section('secondnav')
<div class="row">
   <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ url('public/front/visitorguard/images/slide1.jpg') }}" alt="Los Angeles">
         </div>
         <div class="carousel-item">
            <img src="{{ url('public/front/visitorguard/images/slide2.jpg') }}" alt="Chicago">
         </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span></a>
      <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span></a>
   </div>
</div>
@endsection
@section('content')
<div id="faq" class="container py-5">
   <h2 class="text-center">Frequently Asked Questions 
      <span>FAQ about Disability Insucance</span>
   </h2>
   <div class="row faq">
      <div class="col-md-12 pb-4 mb-4 faqlinks">
         <div class="row">
            <ul>
               <li class="active">
                  <a href="faq.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-disability.png') }}" alt="Life-insurance-icon-disability">
                     <h3>Disability Insurance</h3>
                  </a>
               </li>
               <li>
                  <a href="faq-health-insurance.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-health.png') }}" alt="Life-insurance-icon-health">
                     <h3>Health Insurance</h3>
                  </a>
               </li>
               <li>
                  <a href="faq-life-insurance.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-life.png') }}" alt="Life-insurance-icon-life">
                     <h3>Life Insurance</h3>
                  </a>
               </li>
               <li>
                  <a href="faq-illness.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-illness.png') }}" alt="Life-insurance-icon-illness">
                     <h3>Critical Illness</h3>
                  </a>
               </li>
               <li>
                  <a href="faq-rrsp.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-rrsp.png') }}" alt="Life-insurance-icon-rrsp">
                     <h3>RRSP</h3>
                  </a>
               </li>
               <li>
                  <a href="faq-rsep.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-resp.png') }}" alt="Life-insurance-icon-resp">
                     <h3>RSEP</h3>
                  </a>
               </li>
               <li>
                  <a href="faq-travel.php#faq">
                     <img src="{{ url('public/front/visitorguard/images/icon-travel.png') }}" alt="Life-insurance-icon-travel">
                     <h3>Travel Insurance</h3>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <!-- Accordian starts -->
      <div class="col-md-12">
         <div class="accordion" id="accordionExample">
            <div class="card">
               <div class="card-header" id="faq1">
                  <h5 class="mb-0">
                     <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="true" aria-controls="collapseOne">
                     <i class="fa fa-plus"></i> What is disability insurance?
                     </button>
                  </h5>
               </div>
               <div id="faq_content1" class="collapse show" aria-labelledby="faq1" data-parent="#accordionExample">
                  <div class="card-body">
                     Disability insurance provides a source of income to people who are not able to work and earn because of an accident or illness. Several factors may be responsible for disability including mental health problems, fatal accidents, serious injuries or life-threatening illnesses.
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq2">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                     <i class="fa fa-plus"></i> Why do I need disability insurance?
                     </button>
                  </h5>
               </div>
               <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                  <div class="card-body">
                     Up to 40% of Canadians face disability for 90 days or more before the age of 65. While both the Canadian pension plan and Quebec pension plan offer disability coverage but there are significant limitations. That’s where disability insurance comes in. It will help you meet your financial responsibilities during the disability period.
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq3">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fa fa-plus"></i>  I have a health insurance policy, Am I still covered for disability?
                     </button>
                  </h5>
               </div>
               <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                  <div class="card-body">
                     Medical and health insurance will pay your hospital bills but will not cover income loss resulting from disability. That is where disability insurance plays a major role. It offers an income replacement so that you can pay for daily expenses including:      
                  </div>
                  <ul class="list">
                     <li>House rent</li>
                     <li>Groceries</li>
                     <li>Transportation costs</li>
                     <li>Child care expenses if you have young children</li>
                     <li>Children medical and educational expenses</li>
                     <li>Utility bills</li>
                     <li>Daily chores</li>
                  </ul>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq4">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fa fa-plus"></i> Can I buy disability insurance online?
                     </button>
                  </h5>
               </div>
               <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                  <div class="card-body">
                     Disability insurance is sold through a representative. They are experienced and knowledgeable to recommend the best product by analyzing your needs.
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq5">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fa fa-plus"></i> How much will it cost?
                     </button>
                  </h5>
               </div>
               <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                  <div class="card-body">
                     The expenses for your disability insurance will depend upon several; different factors including:
                     <ul>
                        <li>coverage needs</li>
                        <li>Job nature and status</li>
                        <li>Annual income</li>
                        <li>Gender</li>
                        <li>Health status</li>
                        <li>The monthly benefit amount that you will choose</li>
                        <li>Length of benefit</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq6">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fa fa-plus"></i> Can I make changes to my disability policy if I need to?
                     </button>
                  </h5>
               </div>
               <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                  <div class="card-body">
                     It is a very common practice to modify your disability policy during your life because your coverage amount is linked with your annual income and job status. However, to increase your insurance coverage you have to provide evidence of good physical and mental health.      
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq7">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fa fa-plus"></i> How do I file a claim?
                     </button>
                  </h5>
               </div>
               <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                  <div class="card-body">
                     Normally, you have to fill out a claim form and provide necessary documentation about your disability. Call us at +1-855-500-8999, we will send you the information and supporting documents to make a claim.
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="faq8">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fa fa-plus"></i> How much will I get if I become disabled?
                     </button>
                  </h5>
               </div>
               <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                  <div class="card-body">
                     Depending on your income and nature of your job, your representative can find you solution of getting non-taxable monthly benefit of between $400 and $10,000. Besides, you can choose the range of your benefit period anywhere from few years till your retirement.      
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Accordian Ends -->      
   </div>
</div>
@endsection
@section('script')
<script>
 $(document).ready(function(){
     // Add minus icon for collapse element which is open by default
     $(".collapse.show").each(function(){
      $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
     });
     
     // Toggle plus minus icon on show hide of collapse element
     $(".collapse").on('show.bs.collapse', function(){
      $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
     }).on('hide.bs.collapse', function(){
      $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
     });
 });
</script>
@endsection