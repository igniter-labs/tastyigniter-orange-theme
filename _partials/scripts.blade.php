{!! Assets::getJsVars() !!}
{!! get_script_tags() !!}
{!! $this->theme->ga_tracking_code !!}
@if (!empty($this->theme->custom_js))
    <script type="text/javascript">{!! $this->theme->custom_js !!}</script>
@endif
