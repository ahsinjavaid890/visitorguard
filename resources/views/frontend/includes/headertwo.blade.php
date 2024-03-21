@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorguard')->first();
@endphp
<section class="tabshead">
	<div class="row" style="padding: 15px; margin:0;">
	<div class="col-md-6 col-xs-6"><a style="width: 280px" href="{{ url('') }}"><img src="{{ url('public/images') }}/{{ $settings->header_logo }}" /></a></div>
	<div class="col-md-6 col-xs-6 text-right" style="padding-top: 20px;"><a href="tel:8555008999" style="text-decoration:none; color:#FFF; font-size:26px;"><i class="fa fa-phone"></i> <span class="hidden-xs">855-500-8999</span></a></div>
	</div>
</section>