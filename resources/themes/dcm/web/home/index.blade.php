<!-- Homepage -->

@extends( "layouts.master")

@section('content')
<script type="text/javascript">
<!--
if (screen.width <= 700) {
window.location = "http://m.vokzo.com";
}
//-->
</script>
<div class="row">

    @include('web.home.partials.slider')
    {{-- ads start --}}
    @include('common.ads-placement',[ 'identifier' => 'homepage-leaderboard'])
    {{-- ads end --}}
    @include('web.home.partials.featured-apps')
    @include('web.home.partials.newest-apps')

</div>

@endsection

@push('javascript')

@endpush
