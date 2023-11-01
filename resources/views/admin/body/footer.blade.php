
<footer class="footer position-absolute">
    <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">
                {{-- <span class="d-none d-sm-inline-block mx-1">|</span> --}}
                <br class="d-sm-none">
                © 
                <?php
                $copyYear = 2019; // Set your website start date
                $curYear = date('Y'); // Keeps the second year updated
                echo $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');
                ?>
                
                <a class="mx-1" href="https://www.newinfo.com.ng/" target="_blank">Newinfo Global Solutions Ltd</a>.
            </p>
        </div>
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">This page took {{ round(microtime(true) - LARAVEL_START, 3) }} seconds to render</p>
        </div>
    </div>
</footer>
