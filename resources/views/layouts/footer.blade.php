<footer class="footer-wrapper">
    <div class="footer-wrapper__inside">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p><span>© <?php echo Date('Y'); ?></span><a href="#">@lang('translation.tech_revo')</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-menu text-end">
                        <ul>
                            <li>
                                <a href="#">@lang('translation.about_btn')</a>
                            </li>
                            <li>
                                <a href="#">@lang('translation.team_btn')</a>
                            </li>
                             <li>
                                <a href="{{url('admin/terms-and-conditions')}}">@lang('translation.term_and_condition_btn')</a>
                            </li>
                            <li>
                                <a href="#">@lang('translation.contact_btn')</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<div id="overlayer">
    <div class="loader-overlay">
        <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
        </div>
    </div>
</div>
<div class="overlay-dark-sidebar"></div>
<div class="customizer-overlay"></div>


<script src="{{ url('assets/js/plugins.min.js') }}"></script>
<script src="{{ url('assets/js/script.min.js') }}"></script>
